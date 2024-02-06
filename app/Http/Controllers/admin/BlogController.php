<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all();
        return view("admin.blog.index", compact("blogs"));
    }

    public function create()
    {


        return view("admin.blog.create");
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'blog_date' => 'required',
            'priority' => 'required|integer',
            'author' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'title' => 'required',
            'description' => 'required',
            'links' => 'required',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/blogs');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        $blog = Blog::create($data);
        return redirect()->route('admin.blog.index')->with('success', 'Created Sucesfully');



    }
}

