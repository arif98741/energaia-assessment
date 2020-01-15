<?php

use App\Models\Product;
use App\Models\Supply;
use App\Models\Admin;
use Faker\Generator as Faker;

$factory->define(Supply::class, function (Faker $faker) {
    return [
        'product_id'    => Product::all()->random(),
        'admin_id'      => Admin::all()->random(),
        'amount'        => rand(10, 50),
        'descriptions'  => $faker->text(40),
    ];
});