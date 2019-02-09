<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body','Post_id','User_id'];
    public function post()
    {
        return $this->belongsTo('App\Post','Post_id');
    }
    
    public function merchants()
    {
        return $this->belongsTo('App\Merchant','User_id');
    }
}
