<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['user_id', 'username', 'password', 'nama_lengkap', 'ruang_id'];
}
