<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Files\File;

class IuranBPJS extends Model {
  protected $table = 'iuran_bpjs';
  protected $primaryKey = 'id';
  protected $allowedFields = ['jumlah', 'no_kartu', 'bukti_bayar'];

  public function getDataIuran($no_kartu) {
    $data = $this->findAll();
    return array_filter($data, function($d) use ($no_kartu) {
      return $d['no_kartu'] == $no_kartu;
    });
  }

  public function getAllIuran() {
    return $this->findAll();
  }

  public function bayarIuran($data) {
    return $this->insert($data, false);
  }

  public function getBuktiBayar($id) {
    $data = $this->find($id);
    return new File(WRITEPATH . 'uploads/' . $data['bukti_bayar']);
  }

  public function getNoKartu($id) {
    $data = $this->find($id);
    return $data['no_kartu'];
  }
}