<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passwordModel extends Model
{
    use HasFactory;

    protected $table = 'password';
    protected $fillable = ['nama_aplikasi', 'alamat_ip', 'password'];
}
