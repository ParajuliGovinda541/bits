<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    //

    public function index()
    {
        $clients = Client::all();
        return response()->json([
            'code' => 200,
            'data' => $clients
        ]);
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'priority' => 'required',
        'image' => 'required|mimes:jpeg,png,jpg',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images/clients');
        $image->move($destinationPath, $name);
        $data['image'] = $name;
    }

    Client::create($data);

    return response()->json([
        'code' => 200,
        'data' => 'Created Successfully'
    ]);
}

    public function edit($id)
    {
        $client = Client::find($id);
        return response()->json([
            'code'=> 200,
            'data'=> $client
            ]);
    }
    public function update(Request $request, $id)
    {
        $clients=Client::find($id);
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
            File::delete('images/clients/'.$clients->image);
            $data['image']=$name;

        }
        $clients->update($data);
        return response()->json([
            'code'=> 200,
            'data'=> 'Updated Sucessfully'
            ]);
        }

        public function destroy(Request $request)
        {
            $client = Client::find($request->dataid);
            $client->delete();
            return response()->json([
            'code'=> 200,
            'message'=> 'Deleted Sucessfully'
            ]);
    }
}

