<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
   
    public function index()
    {
        $persona = Persona::all();
        return $persona;
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->rut = $request->rut;
        $persona->nombre1 = $request->nombre1;
        $persona->nombre2 = $request->nombre2;
        $persona->apellido1 = $request->apellido1;
        $persona->apellido2 = $request->apellido2;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;
        $persona->empresa = $request->empresa;
        $persona->save();
    }

    public function show($rut)
    {
        $persona = Persona::where('rut', $rut)->get();
        return $persona;
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
       
        $persona->nombre1 = $request->nombre1;
        $persona->nombre2 = $request->nombre2;
        $persona->apellido1 = $request->apellido1;
        $persona->apellido2 = $request->apellido2;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;
        $persona->empresa = $request->empresa;
        $persona->save();
        return $persona;
    }
 
    public function destroy($id)
    {
        $persona = Persona::destroy($id);
        return $persona;
    }
}
