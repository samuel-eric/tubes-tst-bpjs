<?php

namespace App\Controllers;
use App\Models\PesertaBPJS;

class PesertaController extends BaseController
{
    public function index(): string
    {
      $model = model(PesertaBPJS::class);
      $data['peserta'] = $model->getDataPeserta(session()->get('no_kartu'));
      return view('headerAfterLogin', $data).view('peserta').view('footer');
    }
    public function daftar_peserta() {
      $model = model(PesertaBPJS::class);
      $data['daftar_peserta'] = $model->getAllPeserta();
      return view('headerAdmin', $data).view('adminDaftarPeserta').view('footer');
    }
}
