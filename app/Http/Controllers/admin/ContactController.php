<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index()
    {
        $contacts = Contact::all();
        return view("admin.contacts.index",compact("contacts"));
    }

    public function create()
    {
        return view("admin.contacts.create");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',

        ]);
        $data['message_date']= date('Y-m-d');

        Contact::create($data);
        return redirect()->route('welcome')->with('success','');
    }

    public function destroy(Request $request)

    {
        $contact = Contact::find($request->dataid);
        $contact->delete();
            return redirect()->route('admin.contacts.index')->with('success','');
    }
}
