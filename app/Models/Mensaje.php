<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mensaje extends Model
{
    use HasFactory;

    protected $table = 'mensajes'; 

    public $timestamps = false;

    protected $fillable = [
        'topic', 
        'msg',
        'created_at'
    ];  
}

