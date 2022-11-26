<?php

namespace App\Http\Controllers;

use App\Models\Estacionamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstacionamientoController extends Controller
{
    public function index()
    {
        $estacionamiento = Estacionamiento::all();
        return $estacionamiento;
    }

    public function store(Request $request)
    {
        $estacionamiento = new Estacionamiento();
        $estacionamiento->codigo = $request->codigo;
        $estacionamiento->sector = $request->sector;
        $estacionamiento->save();
    }

    public function show($codigo)
    {
        $estacionamiento = Estacionamiento::where('codigo', $codigo)->get();
        return $estacionamiento;
    }

    public function estSector($sector)
    {
        $estacionamiento = Estacionamiento::where('sector', $sector)->get();
        return $estacionamiento;
    }
 
    public function eliminar($est_id)
    {
        //
        $estacionamiento = Estacionamiento::where('est_id', $est_id)->delete();
        return $estacionamiento;
    }

}
