<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Category;
use App\Comment;
use App\Rating;
class posts extends Model
{
    //
    protected $fillable = [
        'bookname', 'category_id', 'description','phonenumber ','image','Created_at','Updated_at','price','rating_id','comment_id','user_id',
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function rating()
    {
    	//return $this->belongsTo('rating');
        return $this->hasMany('App\Rating');
    }
     public function comments()
    {
        //return $this->belongsTo('rating');
        return $this->hasMany('App\Comment');
    }
    
}
