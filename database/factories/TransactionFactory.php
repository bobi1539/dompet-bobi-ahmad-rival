<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->word(),
            'description' => $this->faker->sentence(3),
            'date' => $this->faker->date(),
            'value' => $this->faker->randomNumber(5, true),
            'pocket_id' => mt_rand(1, 30),
            'category_id' => mt_rand(1, 30),
            'transaction_status_id' => mt_rand(1, 2),
        ];
    }
}
