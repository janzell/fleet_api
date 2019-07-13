<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Class User
 * @property integer id
 * @property string  username
 * @property string  email
 * @property string  password
 * @package App
 */
class User extends Model implements JWTSubject, Authenticatable
{
    use AuthenticableTrait;

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return "{$this->getKey()}";
    }

    /**
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [
            "https://hasura.io/jwt/claims" => [
                "x-hasura-allowed-roles" => ["admin"],
                "x-hasura-default-role"  => "admin",
                "x-hasura-user-id"       => "{$this->id}",
            ]
        ];
    }

    /**
     * Mass assign fields
     * @var array
     */
    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'password'
    ];

    /**
     * Hidden fields
     * @var array
     */
    protected $hidden = [
        'password',
        'deleted_at',
        'updated_at'
    ];

    /**
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
