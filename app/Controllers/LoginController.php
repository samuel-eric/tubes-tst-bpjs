<?php

namespace App\Controllers;
use App\Models\PesertaBPJS;

class LoginController extends BaseController {
  public function index() {
    return view('headerBeforeLogin').view('login').view('footer');
  }

  public function login_action(){
    $model = model(PesertaBPJS::class);
    $no_kartu = $this->request->getPost('no_kartu');
    $password = $this->request->getPost('password');
    $cek = $model->login($no_kartu, $password);
    if ($cek){
      session()->set('nama_user', $cek['nama']);
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