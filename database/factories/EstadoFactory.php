<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estado;

class EstadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'observacion'=> $this->faker->randomElement(['Orden creada', 'Recepcionado por transportista', 'En trayecto', 'En destino', 'Completado con éxito', 'ERROR'])
        ];
    }
}
