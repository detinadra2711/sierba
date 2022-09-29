<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisModel extends Model
{
    use HasFactory;

    protected $table = 'jns_barang';
    protected $fillable = ['jenis'];

//     public function inventaris()
//     {

//         return $this->hasOne(inventarisModel::class, 'jns_id');
//     }
// 
}
