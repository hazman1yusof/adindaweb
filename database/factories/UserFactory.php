<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
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
        'password' => bcrypt('rahsia'),
        'remember_token' => str_random(10),
    ];
});
