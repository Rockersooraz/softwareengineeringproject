<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Category;
// use App\Merchant;


class Advertisement extends Model
{
    // protected $fillable = [
    //     'id', 'title', 'filename','price','location','latitude','longitude', 'location','description' 
    // ];
    public function Category(){
        return $this->belongsTo('App\Category');
    }
    public function merchant(){
        return $this->belongsTo('App\Merchant');
    }
}
