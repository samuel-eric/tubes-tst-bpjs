<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasBPJS extends Model {
  protected $table = 'kelas_bpjs';
  protected $primaryKey = 'id_kelas';

  public function getBiayaIuran($kelas) {
    return $this->find($kelas)['biaya_iuran'];
  }
}