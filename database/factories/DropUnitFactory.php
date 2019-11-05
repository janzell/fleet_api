<?php

use App\Models\DropUnit;

$factory->define(DropUnit::class, function (Faker\Generator $faker) {

    $status = ['24_HRS', 'RENT_TO_OWN', 'STRAIGHT'];

    return [
        'plate_number'           => strtoupper($faker->bothify('???-###')),
        'status'                 => $faker->randomElement($status),
        'notes'                  => $faker->realText(),
        'body_number'            => $faker->numerify('####'),
        'engine_number'          => strtoupper($faker->bothify('???##-#######')),
        'chassis_number'         => strtoupper($faker->bothify('#??##-#######')),
        'cr_number'              => $faker->numerify('#########-##'),
        'cr_issued_at'           => $faker->date('Y-m-d'),
        'year_model'             => $faker->numberBetween(1990, 2019),
        'mv_file_number'         => $faker->numerify('####-###########'),
        'private_number'         => strtoupper($faker->bothify('???-###')),
        'sticker'                => strtoupper($faker->bothify('??####')),
        'series_id'              => $faker->numberBetween(1, 100),
        'acquired_at'            => $faker->date('Y-m-d'),
        'temporary_plate_number' => strtoupper($faker->bothify('??####')),
        'or_number'              => $faker->numerify('#########-##'),
        'or_issued_at'           => $faker->date('Y-m-d'),
        'case_number'            => $faker->numerify('##-##-####')
    ];
});
