<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Posts;
use app\Rating;
use App\User;
use App\comment;
use Validator;
use Image;
use Auth;
use DB;
use Session;

class PostController extends Controller
{
    public function index()
    {
        $rating = Rating::all();
    	return view('User.home',compact('rating'));
    }
    public function create()
    {
    	$categories = Category::all();
    	return view('User.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bookname' => 'required|', 
            'category_id' => 'required',
            'description' => 'required',
            'phonenumber' => 'required|max:20|min:7',
            'price' => 'required|max:10|min:2',
            'image' => 'required|mimes:jpeg,jpg,png,gif',   
        ]);

            if ($validator->fails()) {
            Session::flash('coc','Post Is created');
            return redirect('http://localhost/boipotro.com/public/home/create')
                        ->withErrors($validator)
                        ->withInput();
                    }
        

        $user = auth()->user();
        $user_id=$user->id;
        //$user_name = $user->name;
        $image = time().'.'.request()->image->getClientOriginalExtension();
        $request->file('image')->move("img/",$image);
        $post = new Posts;
        $post->bookname = $request->bookname;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->phonenumber = $request->phonenumber;
        $post->price = $request->price;
        $post->user_id =$user->id;
        //$post->user_name=$user->name;
        $post->rating_id = $request->id;
        $post->image = $image; 
        $post->save();
        Session::flash('cc','Post Is Created');
        return redirect('http://localhost/boipotro.com/public/home/create');
        
        //return redirect('home/store');
    }
    
    public function show()
    {

        $post=Posts::all();
        
        return view('User.show', compact('post'));
                  
    }

    public function edit($id)
    {
        //echo "hello";
        $post=Posts::find($id);
        $categories = Category::all();
        return view('User.edit', compact('post'))
                ->with('categories',$categories); 
    }

    public function update(Request $request, $id)
    {

        $user = auth()->user();
        $user_id=$user->id;
        //$user_name = $user->name;
        $image = time().'.'.request()->image->getClientOriginalExtension();
        $request->file('image')->move("img/",$image);
         $post=Posts::find($id);
         
        $post->bookname = $request->bookname;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->phonenumber = $request->phonenumber;
        $post->price = $request->price;
        $post->user_id =$user->id;
        //$post->user_name=$user->name;
        $post->rating_id = $request->id;
        $post->image = $image; 
        $post->save();
       Session::flash('cc','Post Has Been Updated');
        return redirect('http://localhost/boipotro.com/public/home/create');



    }

    public function delete($id)
    {
        $post=Posts::find($id);
        $post->delete(); 
        return redirect()->back();

    }
     public function singleshow(Request $request)
    {
        $post = DB::table('posts')
            ->where('posts.id', '=', $request->post_id)
            ->get();
            
        $ratings = DB::table('ratings')
        ->select(DB::raw('ROUND(AVG(rating),2) as rating'))
        ->where('ratings.post_id', '=',$request->post_id)
        ->get();

       $comments = DB::table('comments')
            ->where('comments.post_id', '=', $request->post_id)
            ->get();
        ; 
        return view('User.singleshow')->with(compact('post','ratings','comments'));

}

}

