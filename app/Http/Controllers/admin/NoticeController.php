<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Notice;

class NoticeController extends Controller
{
    //

    public function index()
    {

        $notices= Notice::orderBy('priority')->get();
        return view('admin.notice.index', compact('notices'));

    }


    
    public function create()
    {
        return view('admin.notice.create');

    }

    public function store( Request $request)
    {
        // dd($request);

        $data= $request->validate([
           'notice_text'=>'required',
            'notice_date'=>"required",
            'priority'=>"required|integer",
            'show'=>"required",
        ]);

        Notice::create($data);

        // dd('created sucessfully');

        return redirect(route('admin.notice.index'));



    }

    public function edit(Request $request,$id)
    {

        $notice = Notice::find($id);

        // $data= $request->validate([
        //     'notice_text'=>'required',
        //      'notice_date'=>"required",
        //      'priority'=>"required|integer",
        //      'show'=>"required",
        //  ]);
 
        //  Notice::create($data);
         
        return view('admin.notice.edit',compact('notice'));
    }
}
