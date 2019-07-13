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
        'first_name',
        'last_name',
        'license_number',
        'address'
    ];
}
