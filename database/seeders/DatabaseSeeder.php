<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente;
use App\Models\Sala;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $sala1=Sala::create([
            'nombre' => "sala operaciones"
        ]);
        $sala2=Sala::create([
            'nombre' => "sala emergencia"
        ]);

        Paciente::create([
            'nombre' => 'jose',
            'apellidos' => 'arteaga',
            'direccion' => 'montero-finor',
            'telefono' => '8234879',
            'nro_carnet' => '91812',
            'id_sala' => $sala1->id
        ]);

        Paciente::create([
            'nombre' => 'luis',
            'apellidos' => 'mendez',
            'direccion' => 'santa cruz- montero',
            'telefono' => '822622',
            'nro_carnet' => '91112',
            'id_sala' => $sala2->id
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
