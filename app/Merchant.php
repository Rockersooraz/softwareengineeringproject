<?php

namespace App;

use App\Notifications\Merchant\MerchantResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\Advertisement;

class Merchant extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address','mobile','established_date', 'description','avatar', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MerchantResetPassword($token));
    }

    public function Post()
    {
        return $this->hasMany('App\Post','merchant_id');
    }
    public function getid()
   {
     return $this->id;
    }
    public function comments()
    {
        return $this->hasMany('App\Comment','User_id');
    }
    public function logo()
    {
        return $this->hasOne('App\Logo','User_id');
    }
}
