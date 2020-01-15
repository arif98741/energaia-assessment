<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Supplier;
use App\Models\Supply;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(Admin::class, 1)->create();
        factory(ProductCategory::class, 3)->create();
        factory(Supplier::class, 3)->create();
        factory(Product::class, 10)->create();
        factory(Supply::class, 10)->create();
    }
}