<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
	protected $fillable=[
    'name','email', 'is_manager' ,'password','avatar'
];

    public static function where(string $string, $email)
    {
    }
}
