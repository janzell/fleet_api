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
use App\Models\Taxi;
use App\Models\Part;

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
        'address'        => $faker->address,
        'contact_number' => $faker->phoneNumber
    ];
});

$factory->define(Taxi::class, function (Faker\Generator $faker) {
    $status       = $faker->randomElement(['operable', 'maintenance']);
    $malfunctions = $status === 'operable' ? null : $faker->realText();

    return [
        'plate_number'        => $faker->swiftBicNumber,
        'color'               => $faker->colorName,
        'mileage'             => $faker->numberBetween(10000, 100000),
        'planned_maintenance' => $faker->numberBetween(10000, 100000),
        'oil_percentage'      => $faker->numberBetween(1, 100),
        'malfunctions'        => $malfunctions,
        'status'              => $status,
        'notes'               => $faker->text,
        'model'               => $faker->numberBetween(1995, 2019),
        'brand'               => $faker->randomElement(['Toyota', 'Hyundai', 'Ford'])
    ];
});


$factory->define(Part::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->realText(20),
        'code'        => $faker->uuid,
        'quantity'    => $faker->randomNumber(2),
        'description' => $faker->realText(50)
    ];
});


