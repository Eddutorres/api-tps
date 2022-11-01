<?php

namespace App\Models;

use App\Models\Persona;
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
        'hora_ingreso',
        'hora_salida',
        'rut',
        'patente'
      
    ];

    public function persona()
        {
            return $this->hasOne(Persona::class, 'rut', 'rut');
        }

        public function estacionamiento()
        {
            return $this->hasOne(Estacionamiento::class, 'id_est', 'id_est');
        }
}
