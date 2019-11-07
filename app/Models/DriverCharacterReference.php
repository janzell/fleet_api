<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverCharacterReference extends Model
{

    protected $table = 'drivers_character_reference';

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
        'name',
        'address',
        'position',
        'telephone_number',
    ];
}
