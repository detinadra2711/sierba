<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usercodeModel extends Model
{
    use HasFactory;

    protected $table = 'user_code';
    protected $fillable = ['usercode'];
    

    public function users() {

        return $this->hasOne(User::class, 'user_id');
    
    }
}
