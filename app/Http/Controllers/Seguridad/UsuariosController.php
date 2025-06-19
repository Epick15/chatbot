<?php

namespace App\Http\Controllers\Seguridad;

use App\Models\Modulos;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Inertia\Middleware;

class UsuariosController extends Middleware
{


    public function index()
    {
        try {
            $usuarios = User::select('*')
                ->get();
            return response()->json($usuarios);
        } catch (Exception $e) {
            return response()->json([
                'verificado' => false,
                'mensaje' => 'Ocurrió un error al obtener los usuarios.',
                'error' => $e->getMessage(), // Mensaje del error
                'linea' => $e->getLine(),    // Línea donde ocurrió el error
                'archivo' => $e->getFile()   // Archivo donde ocurrió el error
            ], 500); // Código de estado HTTP 500 (Error del servidor)
        }
    }
}
