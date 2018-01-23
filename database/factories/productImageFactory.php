<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\productImage::class, function (Faker $faker) {
    return [
        
        'itemcode' => $faker->bothify('???######'),
        'image_url' => $faker->randomElement($array = array ('shoe','shoe2','shoe3','shoe4')),
        'adduser' => 'farid',
        'adddate' => $faker->dateTime($max = 'now', $timezone = 'Asia/Kuala_Lumpur')
    ];
});
