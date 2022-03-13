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
            'user_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1, 10),
            'qty' => $this->faker->randomNumber(3),
            'address' => $this->faker->address
        ];
    }
}
