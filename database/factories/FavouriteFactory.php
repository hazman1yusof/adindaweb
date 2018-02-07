<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Favourite::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 50) ,
        'adduser' => 'farid',
        'adddate' => $faker->dateTime($max = 'now', $timezone = 'Asia/Kuala_Lumpur')
    ];
});
