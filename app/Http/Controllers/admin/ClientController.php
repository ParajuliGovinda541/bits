<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class   ClientController extends Controller
{
    //

    public function index()
    {
        $clients = Client::all();
        return view("admin.client.index",compact("clients"));
    }

    public function create()
    {
        return view("admin.client.create");
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

    public function edit($id)
    {
        $clients = Client::find($id);
        return view('admin.client.edit',compact('clients'));
    }

    public function update(Request $request, $id)
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
        $clients=Client::find($id);
        Client::update($data);
        return redirect(route('admin.client.update',compact('clients')))->with('success','Client Updated Successfully');


    }

    public function destroy(Request $request)
    {

        $client= Client::find($request->dataid);
        $client->delete();
        return redirect(route('admin.client.index'));   

    }
}
