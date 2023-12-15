<?php

namespace App\Controllers;
use App\Models\PesertaBPJS;

class PesertaController extends BaseController
{
    public function index()
    {
      if(session()->has('nama_user')) {
        $model = model(PesertaBPJS::class);
        $data['peserta'] = $model->getDataPeserta(session()->get('no_kartu'));
        return view('headerAfterLogin', $data).view('peserta').view('footer');
      } else {
        return redirect()->to('/login');
      }
    }
    public function daftar_peserta() {
      if(session()->has('admin')) {
        $model = model(PesertaBPJS::class);
        $data['daftar_peserta'] = $model->getAllPeserta();
        return view('headerAdmin', $data).view('adminDaftarPeserta').view('footer');
      } else {
        return redirect()->to('/login_admin');
      }
    }
}
