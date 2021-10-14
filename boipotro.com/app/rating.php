<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posts;
use App\Rating;
class rating extends Model
{
    protected $fillable = [
        'rating','user_id','post_id',
    ];
     public function post()
    {
    	return $this->belongsTo('App\Posts');
    }
    public function users()
  {
    return $this->belongsTo('App\User');
  }
}
