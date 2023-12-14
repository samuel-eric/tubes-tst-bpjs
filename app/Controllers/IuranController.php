<?php

namespace App\Controllers;
use App\Models\IuranBPJS;

class IuranController extends BaseController {
  public function index() {
    $model = model(IuranBPJS::class);
    $data['daftar_iuran'] = $model->getDataIuran(session()->get('no_kartu'));
    return view('headerAfterLogin', $data).view('iuran').view('footer');
  }
}