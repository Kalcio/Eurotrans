<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SucursalSeeder::class,
            UserSeeder::class,
            AgenteSeeder::class,
            ProveedorSeeder::class,
            ClienteSeeder::class,
            TipoSeeder::class,
            RutaSeeder::class,
            EstadoSeeder::class,
            IncotermSeeder::class,
        ]);
    }
}
