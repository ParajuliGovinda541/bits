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

    public function edit($id)
    {

        $notice = Notice::find($id);
        return view('admin.notice.edit',compact('notice'));
    }


    public function update(Request $request, $id)
    {
        $data= $request->validate([
            'notice_text'=>'required',
             'notice_date'=>'required',
             'priority'=>'required|integer',
             'show'=>'required'
         ]);

        $notice = Notice::find($id);
        $notice->update($data);
        return redirect(route('admin.notice.index',compact('notice')));




    }

    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        return redirect(route('admin.notice.index',compact('notice')));
    }



}
