<?php

namespace App\Controllers;
use App\Models\PesertaBPJS;
use App\Models\Users;
use App\Models\KelasBPJS;

class LoginController extends BaseController {
  public function index() {
    return view('headerBeforeLogin').view('login').view('footer');
  }

  public function login_admin() {
    return view('headerBeforeLogin').view('loginAdmin').view('footer');
  }

  public function login_action(){
    $model = model(PesertaBPJS::class);
    $no_kartu = $this->request->getPost('no_kartu');
    $password = md5($this->request->getPost('password'));
    $cek = $model->login($no_kartu, $password);
    if ($cek){
      $modelKelas = model(KelasBPJS::class);
      session()->set('nama_user', $cek['nama']);
      session()->set('no_kartu', $cek['no_kartu']);
      session()->set('biaya_iuran', $modelKelas->getBiayaIuran($cek['kelas']));
      return redirect()->to('/');
    } else {
      return redirect()->to('/login');
    }
  }

  public function login_admin_action(){
    $model = model(Users::class);
    $username = $this->request->getPost('username');
    $password = md5($this->request->getPost('password'));
    $cek = $model->authUser($username, $password);
    if ($cek == 1){
      session()->set('admin', true);
      return redirect()->to('/');
    } else {
      return redirect()->to('/login');
    }
  }

  public function logout() {
    if(session()->has('admin')) {
      session()->destroy();
      return redirect()->to('/login_admin');
    } else {
      session()->destroy();
      return redirect()->to('/login');
    }
  }
}