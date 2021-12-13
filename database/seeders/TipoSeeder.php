<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::factory()->create([
            'Clasificacion'=>'Aéreo',
        ]);
        Tipo::factory()->create([
            'Clasificacion'=>'Marítimo',
        ]);
        Tipo::factory()->create([
            'Clasificacion'=>'Terrestre',
        ]);
    }
}
