<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_status_id' => rand(1, 2),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(3)
        ];
    }
}
