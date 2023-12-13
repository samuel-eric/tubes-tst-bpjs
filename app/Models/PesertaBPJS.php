<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaBPJS extends Model {
  protected $table = 'peserta_bpjs';
  protected $primaryKey = 'no_kartu';

  public function getDataPeserta($num) {
    return $this->find($num);
  }
}