<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
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
        'plate_number',
        'model',
        'status',
        'malfunctions',
        'mileage',
        'planned_maintenance',
        'oil_percentage',
        'color',
        'brand',
        'notes'
    ];
}
