<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ruta;

class RutaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Ruta::class;

    public function definition()
    {
        return [
            'origen' => $this->faker->country(),
            'destino' => 'Chile',
        ];
    }
}
