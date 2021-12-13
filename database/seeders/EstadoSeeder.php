<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::factory()->create([
            'situacion'=>'Orden creada',
        ]);
        Estado::factory()->create([
            'situacion'=>'Recepcionado por transportista',
        ]);
        Estado::factory()->create([
            'situacion'=>'En trayecto',
        ]);
        Estado::factory()->create([
            'situacion'=>'En destino',
        ]);
        Estado::factory()->create([
            'situacion'=>'Completado con éxito',
        ]);
        Estado::factory()->create([
            'situacion'=>'Retraso',
        ]);
        Estado::factory()->create([
            'situacion'=>'ERROR',
        ]);
    }
}
