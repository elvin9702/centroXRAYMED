<?php

namespace Database\Seeders;

use App\Models\Personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personal::create([
            'nombre' => 'Lucas',
            'apellido' => 'Lucas',
            'edad' => '14',
            'celular' => '12345678',
            'estado' => 'inactivo',
            'rol_id' => 1
        ]);
        Personal::create([
            'nombre' => 'Juan',
            'apellido' => 'Juan',
            'edad' => '11',
            'celular' => '12346789',
            'estado' => 'activo',
            'rol_id' => 2
        ]);
        Personal::create([
            'nombre' => 'Marcos',
            'apellido' => 'Marcos',
            'edad' => '12',
            'celular' => '13467890',
            'estado' => 'inactivo',
            'rol_id' => 3
        ]);
    }
}
