<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'compcode' => '9A',
        'itemcode' => $faker->bothify('???######'),
        'itemname' => $faker->text($maxNbChars = 20),
        'description' => $faker->paragraphs($nb = 3, $asText = true) , // secret
        'currprice' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000) ,
        'qtyonhand' => $faker->numberBetween($min = 1, $max = 99) ,
        'uomcode' => $faker->bothify('???######'),
        'groupcode' => $faker->bothify('???######'),
        'productcat' => $faker->bothify('???######'),
        'adduser' => 'farid',
        'adddate' => $faker->dateTime($max = 'now', $timezone = 'Asia/Kuala_Lumpur')
    ];
});
