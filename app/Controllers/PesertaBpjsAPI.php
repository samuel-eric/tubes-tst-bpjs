<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PesertaBPJS;
use App\Models\Users;

class PesertaBpjsAPI extends ResourceController {
  public function index($username = null, $password = null, $num = null) {
    $userModel = model(Users::class);
    $password = md5($password);
    $cek = $userModel->authUser($username, $password);
    if($cek == 1) {
      $model1 = model(PesertaBPJS::class);
      $res = $model1->getDataPeserta($num);
      if($res) {
        $data = [ 'message' => 'success', 'peserta' => $res];
        return $this->respond($data, 200);
      } else {
        $data = [ 'message' => 'not found', 'peserta' => $res];
        return $this->respond($data, 404);
      }
    } else {
      $data = ['message' => 'unauthorized'];
      return $this->respond($data, 401);
    }
  }
}