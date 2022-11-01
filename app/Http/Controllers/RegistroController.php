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
        $registro->hora_ingreso = $request->hora_ingreso;
        $registro->rut = $request->rut;
        $registro->patente = $request->patente;
        $registro->save();
    }

    public function registroXpatente($patente)
    {
        $registro = Registro::where('patente', $patente)->get();
        return $registro;
    }
    public function registroXrut($rut)
    {
        $registro = Registro::where('rut', $rut)->get();
        return $registro;
    }

    public function registroXfecha($fecha)
    {
        $registro = Registro::where('fecha', $fecha)->get();
        return $registro;
    }

    public function regSalida(Request $request, $id)
    {
        $registro = Registro::find($id);
       
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
    public function destroy($id)
    {
        $registro = Registro::destroy($id);
        return $registro;
    }
}
