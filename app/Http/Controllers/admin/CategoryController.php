<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact("categories"));
    }

    public function create()
    {

        return view('admin.category.create');
    }

    public function store(Request $request)
    {

        $data= $request->validate([
            'category_name'=>'required',
            'category_priotity'=>'required|numeric',
        ]);

        category::create($data);
        return redirect(route('admin.category.index'))->with('success','Notice Created Successfully');
        
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
}
