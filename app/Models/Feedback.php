<?php

namespace App\Models;

use CodeIgniter\Model;

class Feedback extends Model
{
  protected $table = 'balasan';
  protected $primaryKey = 'id_balasan';
  protected $allowedFields = ['id_balasan', 'id_admin', 'id_konsultasi', 'balasan', 'tanggal'];
}