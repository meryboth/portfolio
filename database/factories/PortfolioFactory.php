<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
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
            'category' => $this->faker->randomElement(['Developer','Designer','Photographer']),
            'description' => $this->faker->paragraph(),
            'thumbnail' => $this->faker->image()
        ];
    }
}
