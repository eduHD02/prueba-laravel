<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mensaje extends Model
{
    use HasFactory;

    protected $table = 'mensajes'; 

    protected $fillable = [
        'topic', 
        'msg'
    ];  
}

