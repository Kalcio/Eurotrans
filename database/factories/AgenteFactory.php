<?php

namespace Database\Factories;

use App\Models\Agente;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Agente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->name(),
            'numero' => $this->faker->unique()->e164PhoneNumber(),
            'direccion' => $this->faker->state(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'remember_token' => Str::random(10),
        ];
    }
}
