<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EstacionamientoController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class,'register']);

Route::post('login', [AuthController::class,'login']);



Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::get('logout', [AuthController::class,'logout']);
});



Route::controller(PersonaController::class)->group(function(){
    Route::get('/todasPersonas','index');
    Route::post('/crearPersona','store');
    Route::get('/buscarRut/{rut}','show');
    Route::put('/modificarPersona/{id}','update');
    Route::delete('/eliminarPersona/{id}','destroy');
});
Route::controller(EstacionamientoController::class)->group(function(){
    Route::get('/todosEstacionamientos','index');
    Route::post('/crearEstacionamiento','store');
    Route::get('/buscarEstacionamiento/{codigo}','show');
    Route::put('/modificarEstacionamiento/{id}','update');
    Route::delete('/eliminarEstacionamiento/{id}','destroy');
});
Route::controller(VehiculoController::class)->group(function(){
    Route::get('/todosPatentes','index');
    Route::post('/crearPatente','store');
    Route::get('/buscarPatente/{patente}','show');
    Route::put('/modificarPatente/{id}','update');
    Route::delete('/eliminarPatente/{id}','destroy');
});
Route::controller(RegistroController::class)->group(function(){
    Route::get('/todosRegistros','index');
    Route::post('/crearRegistro','store');
    Route::get('/buscarPatenteRegistro/{patente}','registroXpatente');
    Route::get('/buscarRutRegistro/{rut}','registroXrut');
    Route::put('/registrarSalida/{id}','regSalida');
    Route::put('/modificarUbicacion/{id}','ModUbicacion');
    Route::delete('/eliminarRegistro/{id}','destroy');
});