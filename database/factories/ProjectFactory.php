<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
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
            'description' => $this->faker->paragraph(),
           // 'technology' => $this->faker->randomElement(['Laravel','PHP','Adobe']),
            'image1' => $this->faker->image(),
            'image2' => $this->faker->image()
        ];
    }
}
