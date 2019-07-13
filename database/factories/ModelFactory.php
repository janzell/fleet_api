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

use App\Models\User;
use App\Models\Driver;

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'password'   => 'test123',
        'email'      => $faker->email,
    ];
});

$factory->define(Driver::class, function (Faker\Generator $faker) {
    return [
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'license_number' => $faker->swiftBicNumber,
        'address'        => $faker->address
    ];
});

