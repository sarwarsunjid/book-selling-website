<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Posts;
use App\Contacts;
use Session;
use DB;
class FrontController extends Controller
{
    public function index() {
    	 $post=Posts::all();    
         return view('frontView.home.homeContent')->with(compact('post'));
    }
    public function create() {
    	   
         return view('frontView.home.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|', 
            'email' => 'required',
            'phone' => 'required|',
            'message' => 'required',
             
        ]);

            if ($validator->fails()) {
            Session::flash('coc','Message Not Sent');
            return redirect('http://localhost/boipotro.com/public/contact')
                        ->withErrors($validator)
                        ->withInput();
                    }
        
       
        $contact = new Contacts;
        $contact ->name = $request->name;
        $contact ->email = $request->email;
        $contact ->phone = $request->phone;
        $contact->message = $request->message;  
        $contact->save();
        Session::flash('cc','Message Sent Successfully');
        return redirect('http://localhost/boipotro.com/public/contact');
        
        
    }
    public function te(Request $request)
     {
        
        $data = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->where('categories.name', 'like', '%' . $request->name . '%')
             ->get();
         //return $data;
             
         return view('frontview.home.search')->with(compact('data'));
     } 

}
 