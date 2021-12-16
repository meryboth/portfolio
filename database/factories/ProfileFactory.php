<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'lastName' =>$this->faker->lastName(),
            'email' =>$this->faker->unique()->safeEmail(),
            'avatar' =>$this->faker->firstName(),
            'password' =>$this->faker->password(),
            'ocupation' =>$this->faker->randomElement(['Developer','Designer','Photographer']),
            'bio' =>$this->faker->paragraph()
        ];
    }
}
