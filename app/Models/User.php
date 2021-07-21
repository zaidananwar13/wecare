<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
  protected $table = 'user';
  protected $primaryKey = 'id_user';
  protected $allowedFields = ['id_user', 'nama', 'email', 'jenis_kelamin', 'tanggal_lahir', 'penyakit', 'pola_makan', 'pola_olahraga'];
}