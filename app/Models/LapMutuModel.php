<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapMutuModel extends Model
{
    use HasFactory;

    protected $table = 'lap_mutu';
    protected $fillable = ['tanggal', 'unit', 'masalah', 'petugas', 'solusi', 'status'];
}
