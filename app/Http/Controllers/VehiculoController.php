<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculo = Vehiculo::all();
        return $vehiculo;
    }

    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->patente = $request->patente;
        $vehiculo->rut_persona = $request->rut_persona;
        $vehiculo->save();
    }

    public function show($patente)
    {
        $vehiculo = Vehiculo::where('patente', $patente)->get();
        return $vehiculo;
    }

    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
       
        $vehiculo->rut_persona = $request->rut_persona;
        $vehiculo->save();
        return $vehiculo;
    }
 
    public function destroy($id)
    {
        $vehiculo = Vehiculo::destroy($id);
        return $vehiculo;
    }
}
