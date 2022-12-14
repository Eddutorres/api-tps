<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estacionamiento;

class JoinestacionamientoController extends Controller
{
    function sectorEst($sector){
        
        $estacionamiento = Estacionamiento::leftjoin('registros','registros.codigo_est', '=', 'estacionamientos.codigo')
                            ->where('estacionamientos.sector',$sector)
                            ->get();
                            return $estacionamiento;
    }
    function sectorEst1($sector){

        $estacionamiento = Estacionamiento::where('estacionamientos.sector',$sector)->get();
        
        /*$estacionamiento = Estacionamiento::leftjoin('registros','registros.codigo_est', '=', 'estacionamientos.codigo')
                            ->leftjoin('personas', 'personas.rut', '=', 'registros.rut')
                            ->where('estacionamientos.sector',$sector)
                            ->get();
                            return $estacionamiento;*/
                            return dd($estacionamiento);
    }

    function todosEst(){
        
        $estacionamiento = Estacionamiento::join('registros', 'registros.codigo_est', '=', 'estacionamientos.codigo')
                            ->join('personas', 'personas.rut', '=', 'registros.rut')
                            ->get();
                            return $estacionamiento;
                        }
}
