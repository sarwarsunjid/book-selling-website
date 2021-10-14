<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    //
    public function store(Request $request, $post_id)
    { 
    	$post 	=	Posts::find($post_id);
    	$comment = new Comment;
    	$comment->comment  = $request->comment;
    	$comment->user_id =  $post->user_id;
    	$comment->post_id = $post->id;
        $comment->id 	 = $request->id;
        $comment->save(); 
        return redirect()->back();
        //check koren. 

    }
}
