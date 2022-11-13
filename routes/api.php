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
    Route::get('/personas','index');
    Route::post('/persona','store');
    Route::get('/buscarRut/{rut}','show');
    Route::put('/persona/{id}','update');
    Route::delete('/persona/{id}','destroy');
});
Route::controller(EstacionamientoController::class)->group(function(){
    Route::get('/estacionamientos','index');
    Route::post('/estacionamiento','store');
    Route::get('/estacionamiento/{codigo}','show');
    Route::put('/estacionamiento/{id}','update');
    Route::delete('/estacionamiento/{id}','destroy');
});
Route::controller(VehiculoController::class)->group(function(){
    Route::get('/patentes','index');
    Route::post('/patente','store');
    Route::get('/patente/{patente}','show');
    Route::put('/patente/{id}','update');
    Route::delete('/patente/{id}','destroy');
});
Route::controller(RegistroController::class)->group(function(){
    Route::get('/registros','index');
    Route::post('/registro','store');
    Route::get('/registroPatente/{patente}','registroXpatente');
    Route::get('/registro/{id}','registroXid');
    Route::get('/registroRut/{rut}','registroXrut');
    Route::put('/registrarSalida/{id}','regSalida');
    Route::put('/modificarUbicacion/{id}','ModUbicacion');
    Route::delete('/eliminarRegistro/{id}','destroy');
});