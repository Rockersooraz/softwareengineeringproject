<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Authenticatable
{
    protected $guard = 'admin';
    protected $fillable = ['name', 'phone', 'address', 'company_name' , 'email', 'password' ];
    protected $hidden = ['password','remember_token',];
}
