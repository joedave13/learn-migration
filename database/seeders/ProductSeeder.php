<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_category_id' => 1,
                'name' => 'Apple',
                'description' => 'Very sweet fruit.',
                'price' => 10000,
                'image' => 'apple_image.jpg'
            ],
            [
                'product_category_id' => 3,
                'name' => 'Takoyaki',
                'description' => 'Japanese delicious food.',
                'price' => 8000,
                'image' => 'takoyaki_image.jpg'
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
