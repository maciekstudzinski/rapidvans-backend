<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnquiriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->numerify('##########'),
            'make_model' => $this->faker->randomElement(['Ford Transit', 'Renault Master', 'Fiat Ducato']),
            'question' => $this->faker->paragraph(),
        ];
    }
}
