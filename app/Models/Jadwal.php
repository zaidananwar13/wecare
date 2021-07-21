<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal extends Model
{
  protected $table = 'jadwal';
  protected $primaryKey = 'id_jadwal';
  protected $allowedFields = ['id_jadwal', 'id_user', 'title', 'start', 'end'];
}