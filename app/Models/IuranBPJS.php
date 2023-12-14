<?php

namespace App\Models;

use CodeIgniter\Model;

class IuranBPJS extends Model {
  protected $table = 'iuran_bpjs';
  protected $primaryKey = 'id';
  protected $allowedFields = ['jumlah'];

  public function getDataIuran($no_kartu) {
    $data = $this->findAll();
    return array_filter($data, function($d) use ($no_kartu) {
      return $d['no_kartu'] == $no_kartu;
    });
  }

  public function addIuran($no_kartu, $jumlah) {
    // masukin data ke database
  }
}