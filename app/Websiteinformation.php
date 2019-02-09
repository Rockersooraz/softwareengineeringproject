<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Websiteinformation extends Model
{
    protected $table = 'about_website';
    protected $fillable = [
        'phone', 'logo', 'description','email','address1','address2'
    ];
}
