<?php

use App\Models\DriverEducationalAttainment;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(DriverEducationalAttainment::class, function (Faker\Generator $faker) {
    return [
        'primary_school_name'      => $faker->company,
        'primary_degree'           => $faker->word,
        'primary_year_attended'    => $faker->date('Y') . '-' . $faker->date('Y'),
        'vocational_school_name'   => $faker->company,
        'vocational_degree'        => $faker->word,
        'vocational_year_attended' => $faker->date('Y') . '-' . $faker->date('Y'),
        'secondary_school_name'    => $faker->company,
        'secondary_degree'         => $faker->word,
        'secondary_year_attended'  => $faker->date('Y') . '-' . $faker->date('Y'),
        'tertiary_school_name'     => $faker->company,
        'tertiary_degree'          => $faker->word,
        'tertiary_year_attended'   => $faker->date('Y') . '-' . $faker->date('Y'),
        'course'                   => $faker->word,
        'special_skills'           => $faker->word,
        'others'                   => $faker->word,
    ];
});
