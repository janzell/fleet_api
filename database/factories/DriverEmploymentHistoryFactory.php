<?php

use App\Models\DriverEmploymentHistory;
use Carbon\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(DriverEmploymentHistory::class, function (Faker\Generator $faker) {
    return [
        'company_name' => $faker->company,
        'position'     => $faker->randomElement(['driver', 'chef']),
        'start_date'   => Carbon::now()->subMonth(12)->format('Y-m'),
        'end_date'     => Carbon::now()->subMonth(10)->format('Y-m'),
    ];
});
