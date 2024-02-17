<?php

namespace Database\Seeders;

use Database\Seeders\Categories\ProductsCategoryTableSeeder;
use Database\Seeders\Categories\ArticalesCategoryTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductsCategoryTableSeeder::class,
        ]);
    }
}
