<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverEmploymentHistory extends Model
{

    protected $table = 'drivers_employment_history';

    /**
     * Mass assign fields
     * @var array
     */
    protected $fillable = [
        'company_name',
        'position',
        'start_date',
        'end_date',
        'driver_id'
    ];
}
