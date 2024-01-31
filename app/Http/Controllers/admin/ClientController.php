<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function index()
    {
        return view("admin.client.index");
    }
    public function store(Request $request)
    {
        // dd($request);
        $data=$request->validate([
            'priority'=>'required|numeric',
            'image'=>'required|mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/clients');
            $image ->move($destinationPath,$name);
            $data['image']=$name;    
            
        }
        Client::create($data);
        return redirect(route('admin.client.index'));


    }

    public function edit()
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
