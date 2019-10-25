<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    /**
     * @var string
     */
    protected $table = 'case_numbers';

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
        'number',
        'expired_at'
    ];

    protected $dates = ['expired_at'];

    public $timestamps = true;
}
