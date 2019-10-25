<?php

use App\Models\Series;

$factory->define(Series::class, function (Faker\Generator $faker) {

    $series = ['COROLLA', ' SEDAN', 'XYZ'];

    return [
        'name'  => $faker->randomElement($series) . $faker->randomLetter . $faker->numberBetween(1, 1000),
        'notes' => $faker->text
    ];
});
