<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'price' => $faker->numberBetween(100000, 1000000),
        'desc' => $faker->paragraph($nbSenteces = 3, $variableNbSenteces = true),
        'image' => '/storage/images/product.jpg'
    ];
});
