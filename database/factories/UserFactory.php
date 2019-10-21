<?php

use App\Models\User;
use Faker\Generator;

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'password'   => 'test123',
        'email'      => $faker->email,
    ];
});
