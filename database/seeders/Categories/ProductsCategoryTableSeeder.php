<?php

namespace Database\Seeders\Categories;

use App\Models\Categories\ProductsCategory;
use Illuminate\Database\Seeder;

class ProductsCategoryTableSeeder extends Seeder
{

    public function run(): void
    {
        ProductsCategory::factory()->count(2)->create();
    }
}
