<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [

        'per_id',
        'rut',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'telefono',
        'email',
        'empresa'
      ];
}
