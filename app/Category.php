<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Advertisement;

class Category extends Model
{
    public function post(){
        return $this->hasmany('App\Post','category_id');
    }
}
