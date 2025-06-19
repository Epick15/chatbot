<?php

use App\Http\Controllers\Seguridad\ModulosController;
use App\Http\Controllers\Seguridad\PersonasController;
use App\Http\Controllers\Seguridad\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/modules', [ModulosController::class, 'index']);
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/personas', [PersonasController::class, 'index']);
Route::post('/guardar_persona', [PersonasController::class, 'store']);
Route::post('/actualizar_persona', [PersonasController::class, 'update']);
Route::post('/consulta-reniec', [PersonasController::class, 'consultaReniec']);
