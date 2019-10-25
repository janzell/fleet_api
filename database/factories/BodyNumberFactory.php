<?php

use App\Models\BodyNumber;

$factory->define(BodyNumber::class, function (Faker\Generator $faker) {
    return [
        'number' => $faker->numerify('####'),
        'notes'  => $faker->text
    ];
});
