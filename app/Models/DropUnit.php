<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DropUnit extends Model
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
        'status',
        'notes',
        'body_number',
        'engine_number',
        'chassis_number',
        'cr_number',
        'cr_issued_at',
        'year_model',
        'mv_file_number',
        'private_number',
        'sticker',
        'series_id',
        'acquired_at',
        'temporary_plate_number',
        'or_number',
        'or_issued_at',
        'case_number',
    ];
}
