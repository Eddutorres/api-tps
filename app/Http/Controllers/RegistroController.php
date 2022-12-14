<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        $registro = Registro::all();
        return $registro;
    }

    public function store(Request $request)
    {
        $registro = new Registro();
        $registro->fecha = $request->fecha;
        $registro->codigo_est = $request->codigo_est;
        $registro->estado_est = $request->estado_est;
        $registro->hora_ingreso = $request->hora_ingreso;
        $registro->rut = $request->rut;
        $registro->patente = $request->patente;
        $registro->save();
    }
    public function registroXpatente($patente, $fecha, $estado_est)
    {
        $registro = Registro::where('patente', $patente)
                            ->where('fecha', $fecha)
                            ->where('estado_est', $estado_est)
                            ->get();
        return $registro;
    }
    public function registroXrut($rut)
    {
        $registro = Registro::where('rut', $rut)->get();
        return $registro;
    }

    public function registroXfecha($fecha)
    {
        $registro = Registro::where('fecha', $fecha)
                            ->where('estado_est', 1)
                            ->get();
        return $registro;
    }
    public function registroXid($id)
    {
        $registro = Registro::find($id);
        return $registro;
    }    
    public function regSalida(Request $request, $id)
    {
        $registro = Registro::find($id);
       
        $registro->estado_est = $request->estado_est;
        $registro->hora_salida = $request->hora_salida;
        $registro->save();
        return $registro;
    }
    public function modUbicacion(Request $request, $id)
    {
        $registro = Registro::find($id);
       
        $registro->codigo_est = $request->codigo_est;
        $registro->save();
        return $registro;
    }
        public function modEstado(Request $request, $id)
    {
        $registro = Registro::find($id);
       
        $registro->estado_est = $request->estado_est;
        $registro->save();
        return $registro;
    }
     public function destroy($id)
    {
        $registro = Registro::destroy($id);
        return $registro;
    }
}
