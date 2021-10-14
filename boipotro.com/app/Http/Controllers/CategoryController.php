<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Category;
use Session;
class CategoryController extends Controller
{
    //
    public function index()
    {
    	return view('admin.category.index');
    }

     public function create()
    {
    	// return 'hallo';
    	return view('admin.category.create');
    }


    public function store(Request $request)
    {
    	// return 'asdasd';
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories,name',    
        ]);

        if ($validator->fails()) {
        	Session::flash('coc','Category is not created');
            return redirect('admin/home/category/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        //store category
        $category = new Category;
        $category->name = $request->name;
        $category->save(); 
        Session::flash('cc','Category is created');
        return redirect('admin/home/category/create');
    }
    public function show()
    {

        $categories=Category::all();
       
        return view('admin.category.show', compact('categories'));
    	
    	
    }
    public function edit($id)
    {
        $category=Category::find($id);
        //dd($shop);
        return view('admin.category.edit', compact('category'));

    }

    public function update(Request $request, $id)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|max:20|min:3',    
        ]);

        if ($validator->fails()) {
        	Session::flash('coc','Category is not created');
            return redirect('http://localhost/boipotro.com/public/admin/home/category/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $category=Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('http://localhost/boipotro.com/public/admin/home/category/create')->with('cc','Category has been updated');
        
    }
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete(); 
        return redirect()->back();

    }


    
}
    



