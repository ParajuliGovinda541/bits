<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){

        $banners= Banner::all();
        return view("admin.banner.index",compact("banners"));
    }

    public function create(){
        return view("admin.banner.create");
    }

    public function store(Request $request){

        // dd($request) ;
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



        public function update(Request $request,$id){
        {
            $data= $request->validate([
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
            $banner = Banner::find($id);
            $banner->update($data);
            return redirect(route('admin.banner.index',compact('banner')));
        }

        public function edit($id)
        {    
            $banner=Banner::find($id);
            return view('admin.banner.edit',compact('banner'));
        }



    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect(route('admin.banner.index'));
        
    }
}
