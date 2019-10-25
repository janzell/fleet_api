<?php

$factory->define(App\Models\Garage::class, function (Faker\Generator $faker) {
    return [
        'name'  => $faker->company,
        'address' => $faker->address
    ];
});
