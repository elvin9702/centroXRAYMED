<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            'nombre' => 'Traumatologia',
            'precio' => 100.50,
            'estado' => 'activo',
            'personal_id' => 1
        ]);
        Servicio::create([
            'nombre' => 'Cardiologo',
            'precio' => 200.00,
            'estado' => 'inactivo',
            'personal_id' => 2
        ]);
        Servicio::create([
            'nombre' => 'Consulta',
            'precio' => 50.00,
            'estado' => 'activo',
            'personal_id' => 3
        ]);
    }
}
