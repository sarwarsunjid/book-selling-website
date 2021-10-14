<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\Posts;
use App\User;
use App\rating;
use App\comments;
class comment extends Model
{
    //
    protected $fillable = [
        'comment','user_id','post_id',
    ];
     public function posts()
    {
    	return $this->belongsTo('App\Posts');
    }
    public function users()
  {
    return $this->belongsTo('App\User');
  }
}
