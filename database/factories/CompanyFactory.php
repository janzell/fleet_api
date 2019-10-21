<?php

use App\Models\Company;

$factory->define(Company::class, function (Faker\Generator $faker) {
    return [
        'name'    => $faker->company,
        'address' => $faker->address
    ];
});
