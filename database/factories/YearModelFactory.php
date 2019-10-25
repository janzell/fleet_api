<?php

use App\Models\YearModel;

$factory->define(YearModel::class, function (Faker\Generator $faker) {
    return [
        'notes' => $faker->text
    ];
});
