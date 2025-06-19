<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloSeeder extends Seeder
{
    public function run()
    {
        // Datos de ejemplo para módulos y submódulos
        $modulos = [
            [
                'name' => 'Gestión de Seguridad',
                'orden' => 1,
                'icon' => 'si si-shield',
                'to' => '/',
                'heading' => false, // Asumido como falso
                'submodulos' => [
                    ['name' => 'Sistemas', 'orden' => 1, 'icon' => 'fa fa-gear', 'heading' => false, 'to' => '/sistemas'],
                    ['name' => 'Modulos y submodulos', 'orden' => 2, 'icon' => 'fa fa-cogs', 'heading' => false, 'to' => '/modulos'],
                    ['name' => 'Permisos', 'orden' => 3, 'icon' => 'fa fa-key', 'heading' => false, 'to' => '/permisos'],
                    ['name' => 'Personas', 'orden' => 4, 'icon' => 'fa fa-users', 'heading' => false, 'to' => '/personas'],
                    ['name' => 'Usuarios', 'orden' => 5, 'icon' => 'fa fa-user-circle', 'heading' => false, 'to' => '/usuarios'],
                ],
            ],
            [
                'name' => 'Gestión Áreas',
                'orden' => 2,
                'icon' => 'si si-layers',
                'to' => '/',
                'heading' => false, // Asumido como falso
                'submodulos' => [
                    ['name' => 'Areas', 'orden' => 1, 'icon' => 'fa-cogs', 'heading' => false, 'to' => '/Areas'],
                    ['name' => 'SubAreas', 'orden' => 2, 'icon' => 'fa-key', 'heading' => false, 'to' => '/SubAreas'],
                    ['name' => 'Internos', 'orden' => 3, 'icon' => 'fa-users', 'heading' => false, 'to' => '/Internos'],
                    ['name' => 'Rotaciones', 'orden' => 4, 'icon' => 'fa-user-circle', 'heading' => false, 'to' => '/Rotaciones'],
                ],
            ],
        ];

        // Insertar módulos y submódulos
        foreach ($modulos as $moduloData) {
            // Insertar el módulo principal
            $moduloId = DB::table('modulos')->insertGetId([
                'name' => $moduloData['name'],
                'to' => $moduloData['to'],
                'orden' => $moduloData['orden'],
                'icon' => $moduloData['icon'],
                'heading' => $moduloData['heading'],
                'created_at' => now(),
                'updated_at' => now(),
            ], 'id_modulo');

            // Insertar los submódulos
            foreach ($moduloData['submodulos'] as $submoduloData) {
                DB::table('modulos')->insert([
                    'name' => $submoduloData['name'],
                    'orden' => $submoduloData['orden'],
                    'icon' => $submoduloData['icon'],
                    'heading' => $submoduloData['heading'],
                    'to' => $submoduloData['to'],
                    'parent_id' => $moduloId, // Asignamos el id del módulo principal
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
