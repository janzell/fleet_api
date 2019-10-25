<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BodyNumber extends Model
{
    /**
     * @var string
     */
    protected $table = 'body_numbers';


    /**
     * @var string
     */
    protected $primaryKey = 'number';

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'number'
    ];

    /**
     * @var
     */
    public $timestamps;
}
