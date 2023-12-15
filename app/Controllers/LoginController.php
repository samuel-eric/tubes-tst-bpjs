<?php

namespace App\Controllers;
use App\Models\PesertaBPJS;
use App\Models\Users;

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
      session()->set('nama_user', $cek['nama']);
      session()->set('no_kartu', $cek['no_kartu']);
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
    session()->destroy();
    return redirect()->to('/login');
  }
}