<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->name(),
            'numero' => $this->faker->unique()->e164PhoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'direccion' => $this->faker->state(),
        ];
    }
}
