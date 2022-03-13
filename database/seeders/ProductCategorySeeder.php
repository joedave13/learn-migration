<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_categories = [
            'Fruit', 'Vegetable', 'Food', 'Fashion', 'Electronic'
        ];

        foreach ($product_categories as $product_category) {
            ProductCategory::create([
                'name' => $product_category
            ]);
        }
    }
}
