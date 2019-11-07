<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverOtherInfo extends Model
{

    protected $table = 'drivers_other_info';

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
        'employment_status'
    ];
}
