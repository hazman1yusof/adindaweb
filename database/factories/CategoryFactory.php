<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'catcode' => $faker->unique()->randomElement($array = array ('cat1','cat2','cat3','cat4','cat5')),
        'description' => $faker->unique()->randomElement($array = array ('Category 1','Category 2','Category 3','Category 4','Category 5')),
        'adduser' => 'farid',
        'adddate' => $faker->dateTime($max = 'now', $timezone = 'Asia/Kuala_Lumpur')
    ];
});
