<?php

namespace App\Models;

use App\Models\Estacionamiento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'fecha',
        'codigo_est',
        'estado_est',
        'hora_ingreso',
        'hora_salida',
        'rut',
        'patente'
      
    ];

}
