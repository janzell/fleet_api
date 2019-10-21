<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class YearModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'year_models';

    /**
     * @var string
     */
    protected $primaryKey =  'number';

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}
