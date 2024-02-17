<?php

namespace Database\Factories\Categories;

use App\Models\Categories\ProductsCategory;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductsCategoryFactory extends Factory
{

    protected $model = ProductsCategory::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(10),
            'slug' => $this->faker->slug(10),
            'image' => $this->faker->imageUrl()
        ];
    }
}
