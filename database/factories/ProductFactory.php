<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'compcode' => '9A',
        'itemcode' => $faker->bothify('???######'),
        'itemname' => $faker->text($maxNbChars = 20),
        'description' => $faker->paragraphs($nb = 3, $asText = true),
        'discount' => $faker->numberBetween($min = 1, $max = 20),
        'currprice' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000) ,
        'qtyonhand' => $faker->numberBetween($min = 1, $max = 99) ,
        'uomcode' => $faker->bothify('???######'),
        'groupcode' => $faker->bothify('???######'),
        'rating' => $faker->numberBetween($min = 0, $max = 5),
        'productcat' => $faker->randomElement($array = array ('cat1','cat2','cat3','cat4','cat5')),
        'adduser' => 'farid',
        'adddate' => $faker->dateTime($max = 'now', $timezone = 'Asia/Kuala_Lumpur')
    ];
});
