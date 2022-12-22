<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cctvModel extends Model
{
    use HasFactory;

    protected $table = 'cctv';
    protected $fillable = ['ip_cctv', 'ruang', 'lokasi', 'jenis_cctv', 'jumlah', 'kondisi'];
}
