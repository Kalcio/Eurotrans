<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Incoterm;

class IncotermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Incoterm::factory(3)->create();
    }
}
