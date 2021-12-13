<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruta;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruta::factory(8)->create();
    }
}
