<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //User Post
        $post=Posts::all();
        return view('admin.home',compact('post'));
    }
    
    public function delete($id)
    {
        $post=Posts::find($id);
        $post->delete(); 
        return redirect('/admin/home');

    }
    
    
}

