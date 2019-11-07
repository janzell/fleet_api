<?php

use App\Models\DriverOtherInfo;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(DriverOtherInfo::class, function (Faker\Generator $faker) {
    return [
        'employment_status' => $faker->randomElement(['awol', 'active', 're-apply', 'resigned'])
    ];
});
