<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    /**
     * @var string
     */
    protected $table = 'garages';

    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}
