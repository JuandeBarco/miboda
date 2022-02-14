<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BoletoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // unique alphanumeric string
            'codigo' => $this->faker->unique()->regexify('[a-z0-9]{5}'),
        ];
    }
}
