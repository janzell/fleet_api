<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    /**
     * @var string
     */
    protected $table = 'series';

    /**
     * @var string
     */
    protected $primaryKey = 'name';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'notes'
    ];

    public $timestamps = true;
}
