<?php



use App\Models\Product;
use App\Models\Supply;
use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supply::class, function (Faker $faker) {
    return [
        'product_id' => Product::all()->random(),
        'supplier_id' => Supplier::all()->random(),
        'amount' => rand(10, 50),
        'descriptions' => $faker->text(40),
    ];
});