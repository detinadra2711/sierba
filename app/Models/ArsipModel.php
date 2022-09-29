<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ArsipModel extends Model
{
    use HasFactory;

    protected $table = 'data_file';
    protected $primaryKey = 'no'; //disetting agar Laravel menunjuk kolom 'no' sbg Primary Key -> default PK di laravel adalah kolom id
    protected $fillable = ['judul', 'nama_file', 'jenis_id', 'nomor_dokumen'];
}
