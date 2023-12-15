<?php

namespace App\Controllers;
use App\Models\IuranBPJS;

class IuranController extends BaseController {
  protected $helpers = ['form'];
  public function index() {
    if(session()->has('nama_user')) {
      $model = model(IuranBPJS::class);
      $data['daftar_iuran'] = $model->getDataIuran(session()->get('no_kartu'));
      return view('headerAfterLogin', $data).view('iuran').view('footer');
    } else {
      return redirect()->to('/login');
    }
  }

  public function bayar_iuran() {
    if(session()->has('nama_user')) {
      return view('headerAfterLogin').view('bayarIuran').view('footer');
    } else {
      return redirect()->to('/login');
    }
  }

  public function daftar_iuran() {
    if(session()->has('admin')) {
      $model = model(IuranBPJS::class);
      $data['daftar_iuran'] = $model->getAllIuran();
      return view('headerAdmin', $data).view('adminDaftarIuran').view('footer');
    } else {
      return redirect()->to('/login_admin');
    }
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

  public function download($id) {
    $model = model(IuranBPJS::class);
    $file = $model->getBuktiBayar($id);
    echo $file;
    if ($file->isFile()) {
      ob_clean();
      $extension = pathinfo($file->getPathname(), PATHINFO_EXTENSION);
      header('Content-Type: image/' . $extension);
      header('Content-Disposition: attachment; filename="bukti-bayar-' . $model->getNoKartu($id) . "." . $file->getExtension() . '"');
      readfile($file->getPathname());
      exit();
    }
  }
}