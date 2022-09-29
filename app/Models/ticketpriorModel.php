<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticketpriorModel extends Model
{
    use HasFactory;

    protected $table = 'ticket_prior';
    protected $fillable = ['ticket_priority'];
}
