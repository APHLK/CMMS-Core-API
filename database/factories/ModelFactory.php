<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email_address' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Dog::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->randomDigit,
    ];
});
