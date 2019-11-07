<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverEducationalAttainment extends Model
{

    protected $table = 'drivers_educational_attainment';

    /**
     * @var
     */
    public $timestamps;

    /**
     * Mass assign fields
     * @var array
     */
    protected $fillable = [
        'driver_id',
        'primary_school_name',
        'primary_degree',
        'primary_year_attended',
        'vocational_school_name',
        'vocational_degree',
        'vocational_year_attended',
        'secondary_school_name',
        'secondary_degree',
        'secondary_year_attended',
        'tertiary_school_name',
        'tertiary_degree',
        'tertiary_year_attended',
        'course',
        'special_skills',
        'others',
    ];
}
