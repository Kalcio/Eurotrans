<?php

namespace Database\Seeders;

use App\Models\Agente;
use Illuminate\Database\Seeder;

class AgenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agente::factory(10)->create();

    }
}
