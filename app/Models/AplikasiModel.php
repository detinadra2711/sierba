<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AplikasiModel extends Model
{
    use HasFactory;

    protected $table = 'aplikasi';
    protected $fillable = ['nama_aplikasi', 'keterangan', 'lisensi'];

}

