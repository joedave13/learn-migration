<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_category_id' => $this->faker->numberBetween(1, 5),
            'name' => ucwords($this->faker->word()),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(4, true),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
