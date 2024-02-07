<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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


    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blogs = Blog::find($id);
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
            File::delete('images/blogs/' . $blogs->image);

            $data['image'] = $name;
        }

        $blogs->update($data);
        return redirect()->route('admin.blog.index')->with('success', 'updated Sucesfully');
    }
}

