<?php

namespace Database\Factories;

use App\Models\Sucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

class SucursalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Sucursal::class;

    public function definition()
    {
        return [
            'direccion' => $this->faker->unique()->streetAddress(),
            'numero' => $this->faker->unique()->e164PhoneNumber(),
            'region' => $this->faker->state(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'remember_token' => Str::random(10),
        ];
    }
}
