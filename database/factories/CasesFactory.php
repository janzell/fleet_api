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

use App\Models\Cases;

$factory->define(Cases::class, function (Faker\Generator $faker) {
    return [
        'number'     => $faker->numerify('##-##-####'),
        'expired_at' => $faker->date('Y-m-d')
    ];
});


