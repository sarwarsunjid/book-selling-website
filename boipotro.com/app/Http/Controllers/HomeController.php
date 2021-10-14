<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Posts;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //User Home Page
        $categories= Category::withCount('posts')->get();
        $post=Posts::all();
        return view('User.home')->with(compact('post','category','categories'));
         
    }
    public function te(Request $request)
     {
        
        $data = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->where('categories.name', 'like', '%' . $request->name . '%')
             ->get();
         //return $data;
             
         return view('User.search')->with(compact('data'));
     } 
     

     

}
