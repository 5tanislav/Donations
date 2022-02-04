<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'amount' => $this->faker->randomFloat(2, 1, 300),
            'message' => $this->faker->optional()->words(10, true)
        ];
    }
}
