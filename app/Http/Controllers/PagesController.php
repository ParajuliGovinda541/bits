<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Notice;
use App\Models\Team;
use App\Models\Testomonial;
use Illuminate\Http\Request;

class PagesController extends Controller
{




    public function welcome()
    {

        $notices= Notice::where('show',1)->orderBy('priority')->get();
        // dd($notices);
        $clients= Client::orderBy('priority')->get();
        $teams= Team::all();
        $testomonials= Testomonial::orderBy('client_priority')->get();

        return view('welcome',compact('notices','clients','teams','testomonials'));
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

