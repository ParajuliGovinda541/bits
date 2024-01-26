<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        return view("admin.banner.index");
    }

    public function create(){
        return view("admin.banner.create");
    }

    public function store(Request $request){

        dd($request) ;
        $data=$request->validate([
            'banner_title'=>'required',
            'banner_show'=>'required',
            'banner_image'=>'required|mimes:jpeg,png,jpg',
        ]);

        if($request->hasFile('banner_image'))
        {
            $image=$request->file('banner_image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/banner');
            $image ->move($destinationPath,$name);
            $data['banner_image']=$name;    
            
        }
        Banner::create($data);

        return redirect(route('admin.banner.index'));
    }
}
