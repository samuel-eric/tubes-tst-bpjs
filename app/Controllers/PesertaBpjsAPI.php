<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PesertaBPJS;

class PesertaBpjsAPI extends ResourceController {
  public function index($num = null) {
    $model1 = model(PesertaBPJS::class);
    $res = $model1->getDataPeserta($num);
    if($res) {
      $data = [ 'message' => 'success', 'peserta' => $res];
      return $this->respond($data, 200);
    } else {
      $data = [ 'message' => 'not found', 'peserta' => $res];
      return $this->respond($data, 404);
    }
  }
}