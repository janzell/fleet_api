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

use App\Models\Part;

$factory->define(Part::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->realText(20),
        'code'        => $faker->uuid,
        'quantity'    => $faker->randomNumber(2),
        'description' => $faker->realText(50)
    ];
});


