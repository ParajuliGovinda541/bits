<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //

    public function index()
    {
        
        $categories= category::all();
        $products = Product::all();
        return view("admin.product.index",compact("products",'categories'));
    }

    public function create()
    {
        $categories= category::all();

        return view("admin.product.create",compact('categories'));
    }

    public function store(Request $request)
    {
        $data= $request->validate([
            'name'=>'required',
            'price'=> 'required|integer',
            'description'=> 'required', 
            'discounted_price'=> 'required',
            'stock'=> 'required',
            'image'=> 'required',
            'category_id'=>'required'
        ]) ;
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/products');
            $image ->move($destinationPath,$name);
            $data['image']=$name;    
            
        }

        $product = Product::create($data);
        return redirect()->route('admin.product.index')->with('success','Created Sucessfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $products=Product::find($id);
        $data= $request->validate([
            'name'=>'required',
            'price'=> 'required|integer',
            'description'=> 'required', 
            'discounted_price'=> 'required',
            'stock'=> 'required',
            'image'=> 'required',
            'category_id'=>'required'

        ]) ;

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/products');
            $image ->move($destinationPath,$name);
            File::delete('images/products/'.$products->image);
            $data['image']=$name;    
            
        }
        $products->update($data);
        return redirect()->route('admin.product.update')->with('success','Updated Sucessfully');
    }


    public function destroy(Request $request)
    {

        $product= Product::find($request->dataid);
        $product->delete();
        return redirect(route('admin.product.index'));   

    }
}
