<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'rut'=>'123456789',
            'name' => 'admin',
            'numero'=>'+998788982',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('admin123'),
            'direccion' => 'Utem 12',
            'id_sucursal' => '1',
        ]);
        User::factory(50)->create();
    }
}
