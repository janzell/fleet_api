<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * @var string
     */
    protected $table = 'companies';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'address'
    ];

    public $timestamps = true;
}
