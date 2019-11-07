<?php

use App\Models\Driver;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Driver::class, function (Faker\Generator $faker) {
    return [
        'driver_number'      => $faker->numberBetween(1000, 3000),
        'first_name'         => $faker->firstName,
        'last_name'          => $faker->lastName,
        'middle_name'        => $faker->lastName,
        'license_number'     => $faker->bothify('???-####'),
        'city_address'       => $faker->city,
        'telephone_number'   => $faker->phoneNumber,
        'provincial_address' => $faker->address,
        'email_address'      => $faker->email,
        'birthdate'          => $faker->dateTimeBetween(),
        'birthplace'         => $faker->address,
        'height'             => $faker->numberBetween(110, 300),
        'weight'             => $faker->numberBetween(20, 300),
        'religion'           => $faker->randomElement(['muslim', 'catholic christian']),
        'civil_status'       => $faker->randomElement(['single', 'married']),
        'citizenship'        => $faker->randomElement(['Filipino', 'American']),
        'gender'             => $faker->randomElement(['male', 'female']),
        'spouse_name'        => $faker->name('female'),
        'spouse_address'     => $faker->address,
        'occupation'         => $faker->randomElement(['housewife']),
        'father_name'        => $faker->name('male'),
        'father_occupation'  => $faker->randomElement(['driver', 'accountant']),
        'mother_name'        => $faker->name('female'),
        'mother_occupation'  => $faker->randomElement(['housewife']),
        'parent_address'     => $faker->address,
        'parent_tel_number'  => $faker->phoneNumber,
        'language'           => $faker->randomElement(['cebuano', 'tagalog'])
    ];
});
