<?php

namespace Database\Factories;

//use Illuminate\Database\Eloquent\Factories\Factory;
use App\Order;
use Faker\Generator as Faker;
$factory->define(Order::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'amount' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
