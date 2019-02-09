<?php

namespace App;

use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;
use CyrildeWit\EloquentViewable\Viewable;
class Post extends Model
{
    protected $fillable = [
        'title', 'merchant_id', 'filename','location','description','category', 
    ];
    // use Searchable;
    // use Viewable;
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    public function merchant(){
        return $this->belongsTo('App\Merchant','merchant_id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','Post_id');
    } 
}
