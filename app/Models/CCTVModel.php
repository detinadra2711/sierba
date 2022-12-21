<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;


class CCTVModel extends Model
{
    use HasFactory;

    protected $table = 'cctv';
    protected $fillable = ['ip_cctv', 'lokasi_cctv'];
}
