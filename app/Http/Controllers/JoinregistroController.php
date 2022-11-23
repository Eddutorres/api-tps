<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinregistroController extends Controller
{

    function sectorRegPrueba($sector){
               
        $registros = Registro::leftjoin('estacionamientos', 'estacionamientos.codigo', '=', 'registros.codigo_est')
                            ->where('estacionamientos.sector',$sector)
                            ->whereDate('registros.fecha','2022-11-23')
                            ->get();
                            //return $registros;
                            return dd($registros);
    }
    function sectorReg($sector){
               
        $registros = Registro::leftjoin('estacionamientos', 'estacionamientos.codigo', '=', 'registros.codigo_est')
                            ->leftjoin('personas', 'personas.rut', '=', 'registros.rut')
                            ->where('estacionamientos.sector',$sector)
                            ->get();
                            return $registros;
                            //return dd($registros);
    }
    function sectorRegTest2($sector,$fecha){

        $estacionamientos = DB::table('estacionamientos');

        $estacionamientos = $estacionamientos->where('estacionamientos.sector',$sector);

        $registros = $estacionamientos
            ->select('estacionamientos.*','registros.*')
            ->leftJoin('registros','registros.codigo_est','estacionamientos.codigo')
            ->where('registros.fecha',$fecha)
            ->get();
               
            return dd($registros);
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
    function idReg($id){
               
        $registros = Registro::join('estacionamientos', 'estacionamientos.codigo', '=', 'registros.codigo_est')
                            ->join('personas', 'personas.rut', '=', 'registros.rut')
                            ->where('registros.id',$id)
                            ->get();
                            return $registros;
                            //return dd($registros);
    }
}
