<?php

namespace App\Http\Controllers\Seguridad;

use App\Models\Modulos;
use App\Models\Personas;
use App\Models\User;
use Exception;
use Inertia\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonasController extends Middleware
{
    public function index()
    {
        try {
            $personas = Personas::select('*')->orderBy('created_at')
                ->get();
            return response()->json($personas);
        } catch (Exception $e) {
            return response()->json([
                'verificado' => false,
                'mensaje' => 'Ocurrió un error al obtener los personas.',
                'error' => $e->getMessage(), // Mensaje del error
                'linea' => $e->getLine(),    // Línea donde ocurrió el error
                'archivo' => $e->getFile()   // Archivo donde ocurrió el error
            ], 500); // Código de estado HTTP 500 (Error del servidor)
        }
    }

    public function consultaReniec(Request $request)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.apis.net.pe/v1/dni?numero=' . $request->doc);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    public function store(Request $request)
    {
        try {
            // Limpiar los valores "null" en los datos del formulario
            $input = array_map(function ($value) {
                return $value === 'null' ? null : $value;
            }, $request->except('foto')); // Excluir la foto de los valores llenables directamente
            // Crear una nueva instancia de Personas y asignar los valores
            $persona = new Personas();
            $persona->fill($input);
            // Procesar la imagen si está presente
            if ($request->hasFile('foto')) {
                $destinoimagen = 'imagenes/fotos/Persona/';
                $file = $request->file("foto");
                // Renombrar el archivo con un nombre único
                $nombre_foto = Str::slug(
                    "{$input['nombres']}-{$input['identificacion']}-" . now()->format("Y-m-d_H-i-s")
                ) . "." . $file->guessExtension();
                // Mover el archivo al destino
                $file->move(public_path($destinoimagen), $nombre_foto);
                // Guardar la ruta de la foto en el modelo
                $persona->foto = $nombre_foto;
            } else {
                // Si no se subió imagen, asegurarse de que foto sea null
                $persona->foto = null;
            }
            $persona->save();
            return response()->json(["verificado" => true]);
        } catch (Exception $e) {
            return response()->json([
                'verificado' => false,
                'error' => $e->getMessage(), // Mensaje del error
            ], 500); // Código de estado HTTP 500 (Error del servidor)
        }
    }

    public function update(Request $request)
    {
        try {
            // Limpiar valores "null" del formulario y excluir la foto
            $input = array_map(function ($value) {
                return $value === 'null' ? null : $value;
            }, $request->except('foto'));
            // Buscar la persona a actualizar por su ID
            $persona = Personas::findOrFail($request->id_persona);  // Usar el ID del registro que deseas actualizar
            // Actualizar los atributos del modelo
            $persona->fill($input);
            // Verificar si se sube un nueva foto
            if ($request->hasFile('foto')) {
                $destinoimagen = 'imagenes/fotos/Persona/';
                $file = $request->file("foto");
                // Generar un nombre único para la imagen
                $nombre_foto = Str::slug(
                    "{$input['nombres']}-{$input['identificacion']}-" . now()->format("Y-m-d_H-i-s")
                ) . "." . $file->guessExtension();
                // Mover el archivo al destino especificado
                $file->move(public_path($destinoimagen), $nombre_foto);
                // Si hay una foto antigua, eliminarla (opcional, depende de tu preferencia)
                if ($persona->foto && file_exists(public_path($destinoimagen . $persona->foto))) {
                    unlink(public_path($destinoimagen . $persona->foto));
                }
                // Asignar la nueva foto al modelo
                $persona->foto = $nombre_foto;
            } elseif (!$request->has('foto') && !$persona->foto) {
                // Si no se envía foto y el campo foto está vacío, asignar null
                $persona->foto = null;
            }
            // Guardar los cambios en la base de datos
            $persona->save();
            return response()->json(["verificado" => true]);
        } catch (Exception $e) {
            return response()->json([
                'verificado' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
