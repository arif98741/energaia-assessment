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
        'price' => $faker->randomElement([200, 300, 400, 500]),
        'unit' => $faker->randomElement(['kg', 'liter', 'piece', 'pound', 'ince']),
        'image' => $faker->text(20) . './' . $faker->randomElement(['jpg', 'png', 'jpeg'])
    ];
});