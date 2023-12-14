<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model {
  protected $table = 'users';
  protected $primaryKey = 'username';

  public function authUser($username, $password) {
    $res = $this->find($username);
    if($res && $res['password'] == $password) {
      return 1;
    } else {
      return 0;
    }
  }
}