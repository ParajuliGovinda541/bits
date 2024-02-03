<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testomonial;
use Illuminate\Http\Request;

class TestomonialController extends Controller
{
    //


    public function index()
    {

        $testomonials = Testomonial::OrderBy('client_priority')->get();
        return view("admin.testomonial.index", compact("testomonials"));

    }

    public function create()
    {
        return view("admin.testomonial.create");
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'client_priority' => 'required|numeric',
            'client_image' => 'required|mimes:jpeg,jpg,png',
            'client_company' => 'required',
            'client_word' => 'required',
            'client_name' => 'required',

        ]);
        if ($request->hasFile('client_image')) {
            $image = $request->file('client_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/testomonial');
            $image->move($destinationPath, $name);
            $data['client_image'] = $name;
        }

        $testomonial = Testomonial::Create($data);
        return redirect()->route('admin.testomonial.index')->with('success', 'Testomonial Created Sucessfully');


    }
    public function edit($id)
    {
        $testomonial = Testomonial::find($id);
        return view('admin.testomonial.edit', compact('testomonial'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'client_priority' => 'required|numeric',
            'client_image' => 'required|mimes:jpeg,jpg,png',
            'client_company' => 'required',
            'client_word' => 'required',
            'client_name' => 'required',

        ]);
        if ($request->hasFile('client_image')) {
            $image = $request->file('client_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/testomonial');
            $image->move($destinationPath, $name);
            $data['client_image'] = $name;
        }

        $testomonial = Testomonial::find($id);
        $testomonial = $testomonial->update($data);

        return redirect()->route('admin.testomonial.index')->with('success', 'Testomonial Updated Sucessfully');

    }

    public function destroy(Request $request)
    {
        $testomonial = Testomonial::find($request->dataid);
        $testomonial->delete();
        return redirect()->route('admin.testomonial.index')->with('success','Deleted Sucessfully');
    }
}


