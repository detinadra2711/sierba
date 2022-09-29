<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticketstatModel extends Model
{
    use HasFactory;

    protected $table = 'ticket_stat';
    protected $fillable = ['ticket_status'];
}
