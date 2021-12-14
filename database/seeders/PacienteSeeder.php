<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::create([
            'nombres' => 'Juan Quito',
            'edad' => '19',
            'genero' => 'masculino',
            'celular' => '12345678',
            'medico_id' => 2
        ]);
        Paciente::create([
            'nombres' => 'Henry Lopez',
            'edad' => '11',
            'genero' => 'masculino',
            'celular' => '12347890',
            'medico_id' => 3
        ]);
        Paciente::create([
            'nombres' => 'Mateo Sierra',
            'edad' => '20',
            'genero' => 'masculino',
            'celular' => '123432545',
            'medico_id' => 1
        ]);
    }
}
