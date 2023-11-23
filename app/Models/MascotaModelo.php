<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MascotaModelo extends Model
{
    protected $table = 'mascotas';
    use HasFactory;

    protected $fillable=[
        'nombre','raza' ,'edad' ,'peso' 
    ];
}
