<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaBPJS extends Model {
  protected $table = 'peserta_bpjs';
  protected $primaryKey = 'no_kartu';
  protected $allowedFields = ['nama', 'nik', 'password', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'no_telp', 'no_kartu'];

  public function getAllPeserta() {
    return $this->findAll();
  }

  public function getDataPeserta($no_kartu) {
    return $this->find($no_kartu);
  }

  public function login($no_kartu, $password) {
    $res = $this->find($no_kartu);
    if($res && $res['password'] == $password) {
      return $res;
    } else {
      return null;
    }
  }

  public function daftar($data) {
    return $this->insert($data);
  }
}