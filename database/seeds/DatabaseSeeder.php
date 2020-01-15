<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;


class DatabaseSeeder extends Seeder
{

    public function run()
    {

        factory(ProductCategory::class, 3)->create();
        factory(Product::class, 10)->create();
    }
}