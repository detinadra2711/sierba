<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class helpdeskModel extends Model
{
    use HasFactory;

    protected $table = 'help_desk';
    protected $fillable = ['ticket_no', 'user', 'ruangan', 'ticket_priority', 'ticket_status'];
}
