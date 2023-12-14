<?php

namespace App\Controllers;
use App\Models\IuranBPJS;

class IuranController extends BaseController {
  public function index() {
    $model = model(IuranBPJS::class);
    $data['daftar_iuran'] = $model->getDataIuran(session()->get('no_kartu'));
    return view('headerAfterLogin', $data).view('iuran').view('footer');
  }

  public function bayar_iuran() {
    return view('headerAfterLogin').view('bayarIuran').view('footer');
  }

  public function bayar_iuran_action() {
    $model = model(IuranBPJS::class);
    $no_kartu = session()->get('no_kartu');
    $jumlah = $this->request->getPost('jumlah');
    $data = [
      'no_kartu' => $no_kartu,
      'jumlah' => $jumlah
    ];
    $berhasilBayar = $model->bayarIuran($data);
    if($berhasilBayar) {
      return redirect()->to('/iuran');
    }
  }
}