<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Ambiente::create([
            'nome' => 'sala 1',
            'descricao' => 'uma sala de aula',
            'status' => true,
        ]);

        Ambiente::create([
            'nome' => 'sala 2',
            'descricao' => 'uma sala de aula',
            'status' => true,
        ]);

        Ambiente::create([
            'nome' => 'sala 3',
            'descricao' => 'uma sala de aula',
            'status' => false,
        ]);

        Sensor::create([
            'ambiente_id' => 1,
            'codigo' => 'Temp01',
            'tipo' => 'temperatura',
            'descricao' => 'um medidor que regula a temperatura do ambiente',
            'status' => true,
        ]);
        
        Sensor::create([
            'ambiente_id' => 2,
            'codigo' => 'Temp02',
            'tipo' => 'temperatura',
            'descricao' => 'um medidor que regula a temperatura do ambiente',
            'status' => true,
        ]);

        Sensor::create([
            'ambiente_id' => 3,
            'codigo' => 'Temp03',
            'tipo' => 'temperatura',
            'descricao' => 'um medidor que regula a temperatura do ambiente',
            'status' => true,
        ]);
    }
}
