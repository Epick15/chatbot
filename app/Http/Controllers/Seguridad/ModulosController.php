<?php

namespace App\Http\Controllers\Seguridad;

use App\Models\Modulos;
use Exception;
use Illuminate\Http\Request;
use Inertia\Middleware;

class ModulosController extends Middleware
{
    public function index()
    {

        try {
            $modulos = Modulos::whereNull('parent_id')
                ->with('submodulos')
                ->orderBy('orden')
                ->get();

            // Formatear respuesta para el frontend
            $navigationNodes = $modulos->map(function ($modulo) {
                $node = [
                    'name' => $modulo->name,
                    'to' => $modulo->to ?? '#',
                    'icon' => $modulo->icon,
                    'heading' => $modulo->heading,
                ];

                // Agregar submódulos si existen
                if ($modulo->submodulos->isNotEmpty()) {
                    $node['sub'] = $modulo->submodulos->map(function ($submodulo) {
                        return [
                            'name' => $submodulo->name,
                            'to' => $submodulo->to ?? '#',
                            'icon' => $submodulo->icon,
                            'heading' => $submodulo->heading,
                            'subActivePaths' => $submodulo->to
                        ];
                    })->toArray();
                }
                return $node;
            });
            return response()->json($navigationNodes);
        } catch (Exception $e) {
            return response()->json([
                'verificado' => false,
                'mensaje' => 'Ocurrió un error al obtener los módulos.',
                'error' => $e->getMessage(), // Mensaje del error
                'linea' => $e->getLine(),    // Línea donde ocurrió el error
                'archivo' => $e->getFile()   // Archivo donde ocurrió el error
            ], 500); // Código de estado HTTP 500 (Error del servidor)
        }
    }
}
