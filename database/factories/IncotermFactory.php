<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Incoterm;

class IncotermFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clasificacion' => $this->faker->unique()->regexify('[A-Z]{3}'),
        ];
    }
}
