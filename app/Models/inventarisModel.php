<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventarisModel extends Model
{
    use HasFactory;

    protected $table = 'inventaris';
    protected $fillable = ['jns_id', 'nama_barang', 'jenis_pengadaan', 'kategori_barang'];

    // public function jenis()
    // {

    //     return $this->belongsTo(jenisModel::class, 'jns_id');
    // }
}
