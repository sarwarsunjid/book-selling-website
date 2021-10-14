<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Rating;
class RatingController extends Controller
{
    //

    public function store(Request $request, $post_id)
    { 
    	$post 	=	Posts::find($post_id);
    	$rating = new Rating;
    	$rating->rating  = $request->rating;
    	$rating->user_id =  $post->user_id;
    	$rating->post_id = $post->id;
        $rating->id 	 = $request->id;
        $rating->save(); 
        return redirect()->back();
        //check koren. 

    }
}
