<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\ProductCategory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'product_category_id' => ProductCategory::all()->random(),
        'descriptions' => $faker->text(100),
        'price' => rand(100, 500),
        'image' => $faker->text(20) . './' . $faker->randomElement(['jpg', 'png', 'jpeg'])
    ];
});