<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Notice;
use Illuminate\Http\Request;

class PagesController extends Controller
{




    public function welcome()
    {
        $notices= Notice::where('show',1)->orderBy('priority')->get();
        // dd($notices);
        $clients= Client::orderBy('priority')->get();
        return view('welcome',compact('notices','clients'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function project()
    {
        return view('project');
    }

   
    public function service()
    {
        return view('service');
    }
}

