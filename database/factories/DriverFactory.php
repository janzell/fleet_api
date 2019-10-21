<?php

use App\Models\Driver;
use Faker\Generator;

$factory->define(Driver::class, function (Faker\Generator $faker) {
    return [
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'license_number' => $faker->swiftBicNumber,
        'address'        => $faker->address,
        'contact_number' => $faker->phoneNumber
    ];
});
