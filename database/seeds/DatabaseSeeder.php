<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Supplier;
use App\Models\Supply;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(ProductCategory::class, 3)->create();
        factory(Product::class, 10)->create();
        factory(Supplier::class, 4)->create();
        factory(Supply::class, 10)->create();
    }
}