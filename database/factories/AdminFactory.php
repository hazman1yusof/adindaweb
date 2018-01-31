<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'f_name' => $faker->firstName,
        'l_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->streetAddress,
        'postcode' =>$faker->postcode,
        'city' => $faker->city,
        'province' => $faker->state,
        'mobile_nm' => $faker->numerify('###########'),
        'password' => 'rahsia', // secret
        'remember_token' => str_random(10),
    ];
});
