<?php

namespace App\Http\Controllers;

use App\Models\Estacionamiento;
use Illuminate\Http\Request;

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


 
    public function destroy($id)
    {
        //
        $estacionamiento = Estacionamiento::destroy($id);
        return $estacionamiento;
    }

}
