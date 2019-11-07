<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * @var
     */
    public $timestamps;

    /**
     * Mass assign fields
     * @var array
     */
    protected $fillable = [
        'driver_number',
        'first_name',
        'last_name',
        'middle_name',
        'license_number',
        'city_address',
        'telephone_number',
        'provincial_address',
        'email_address',
        'birthdate',
        'birthplace',
        'height',
        'weight',
        'religion',
        'civil_status',
        'citizenship',
        'gender',
        'spouse_name',
        'spouse_address',
        'occupation',
        'father_name',
        'father_occupation',
        'mother_name',
        'mother_occupation',
        'parent_address',
        'parent_tel_number',
        'language'
    ];
}
