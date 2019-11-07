<?php

use App\Models\DriverCharacterReference;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(DriverCharacterReference::class, function (Faker\Generator $faker) {
    return [
        'name'             => $faker->name,
        'address'          => $faker->address,
        'position'         => $faker->randomElement(['manager']),
        'telephone_number' => $faker->phoneNumber
    ];
});
