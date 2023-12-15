<?php

namespace App\Controllers;
use App\Models\IuranBPJS;

class IuranController extends BaseController {
  protected $helpers = ['form'];
  public function index() {
    $model = model(IuranBPJS::class);
    $data['daftar_iuran'] = $model->getDataIuran(session()->get('no_kartu'));
    return view('headerAfterLogin', $data).view('iuran').view('footer');
  }

  public function bayar_iuran() {
    return view('headerAfterLogin').view('bayarIuran').view('footer');
  }

  public function daftar_iuran() {
    $model = model(IuranBPJS::class);
    $data['daftar_iuran'] = $model->getAllIuran();
    return view('headerAdmin', $data).view('adminDaftarIuran').view('footer');
  }

  public function bayar_iuran_action() {
    $model = model(IuranBPJS::class);
    $no_kartu = session()->get('no_kartu');
    $jumlah = $this->request->getPost('jumlah');
    $bukti_bayar = $this->request->getFile('bukti_bayar');
    if($bukti_bayar->isValid() && !$bukti_bayar->hasMoved()) {
      $newName = $bukti_bayar->getRandomName();
      $bukti_bayar->move(WRITEPATH . 'uploads/', $newName);
      $data = [
        'no_kartu' => $no_kartu,
        'jumlah' => $jumlah,
        'bukti_bayar' => $newName
      ];
      $berhasilBayar = $model->bayarIuran($data);
      if($berhasilBayar) {
        return redirect()->to('/iuran');
      }
    }
  }
}