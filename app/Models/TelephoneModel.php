<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelephoneModel extends Model
{
    use HasFactory;

    protected $table = 'telephone';
    protected $primaryKey = 'No';
    protected $fillable = ['Gedung', 'Ruangan_id', 'Nomor_Ekstension', 'Keterangan'];
}
