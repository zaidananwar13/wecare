<?php

namespace App\Models;

use CodeIgniter\Model;

class Konsultasi extends Model
{
  protected $table = 'konsultasi';
  protected $primaryKey = 'id_konsultasi';
  protected $allowedFields = ['id_konsultasi', 'id_user', 'pertanyaan'];
}