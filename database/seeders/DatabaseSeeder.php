<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Erick',
            'email' => 'ermadida1@gmail.com',
            'password' => bcrypt('150699**'), // Aquí se encripta la contraseña
        ]);

        $this->call([
            ModuloSeeder::class,
        ]);
    }
}
