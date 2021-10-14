<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $fillable = array('name');
    public function posts()
    {
    	return $this->hasMany('App\Posts');
    }

}
