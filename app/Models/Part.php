<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    /**
     * @var
     */
    public $timestamps;

    protected $table = 'parts';

    /**
     * Mass assign fields
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'quantity',
        'description'
    ];
}
