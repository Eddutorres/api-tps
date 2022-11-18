<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class JoinregistroController extends Controller
{

    function sectorReg($sector){
               
        $registros = Registro::leftjoin('estacionamientos', 'estacionamientos.codigo', '=', 'registros.codigo_est')
                            ->join('personas', 'personas.rut', '=', 'registros.rut')
                            ->where('estacionamientos.sector',$sector)
                            ->get();
                            return $registros;
    }

    function todosReg(){
        
        $registros = Registro::join('estacionamientos', 'estacionamientos.codigo', '=', 'registros.codigo_est')
                            ->join('personas', 'personas.rut', '=', 'registros.rut')
                            ->get();
                            return $registros;
    }
    
    function reportes($sector, $fecha_ini, $fecha_fin){
               
        $reportes = Registro::join('estacionamientos', 'estacionamientos.codigo', '=', 'registros.codigo_est')
                            ->join('personas', 'personas.rut', '=', 'registros.rut')
                            ->where('estacionamientos.sector',$sector)
                            ->whereBetween('registros.fecha',[$fecha_ini, $fecha_fin])
                            ->get();
                            return $reportes;
    }
    function patenteReg($patente, $fecha){
               
        $patentes = Registro::join('estacionamientos', 'estacionamientos.codigo', '=', 'registros.codigo_est')
                            ->join('personas', 'personas.rut', '=', 'registros.rut')
                            ->where('registros.patente',$patente)
                            ->where('registros.fecha',$fecha)
                            ->get();
                            return $patentes;
    }
    
}
