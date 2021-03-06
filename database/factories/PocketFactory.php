<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PocketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pocket_status_id' => rand(1, 2),
            'name' => $this->faker->word(),
            'reference' => $this->faker->randomNumber(5, true),
            'description' => $this->faker->sentence(3)
        ];
    }
}
