<?php

namespace Database\Seeders;

use App\Models\Medico;
use Illuminate\Database\Seeder;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medico::create([
            'nombres' => 'Juan Quito',
            'f_nacimiento' => '1998-05-27',
            'genero' => 'masculino',
            'estado' => 'activo',
            'celular' => '12345678',
            'direccion' => 'Calle Argentina',
            'rol_id' => 2
        ]);
        Medico::create([
            'nombres' => 'Henry Lopez',
            'f_nacimiento' => '1990-05-16"',
            'genero' => 'masculino',
            'estado' => 'inactivo',
            'celular' => '12347890',
            'direccion' => 'Calle Venezuela',
            'rol_id' => 3
        ]);
        Medico::create([
            'nombres' => 'Mateo Sierra',
            'f_nacimiento' => '2020-01-12',
            'genero' => 'masculino',
            'estado' => 'inactivo',
            'celular' => '123432545',
            'direccion' => 'Calle Brasil',
            'rol_id' => 1
        ]);
    }
}
