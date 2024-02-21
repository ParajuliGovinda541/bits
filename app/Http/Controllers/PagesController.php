<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Notice;
use App\Models\Product;
use App\Models\Project;
use App\Models\Team;
use App\Models\Testomonial;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{




    public function welcome()
    {


        $notices= Notice::where('show',1)->orderBy('priority')->get();
        // dd($notices);
        $clients= Client::orderBy('priority')->get();
        $teams= Team::all();
        $testomonials= Testomonial::orderBy('client_priority')->get();
        $this->Visit();
        $visits= Visit::all();
        return view('welcome',compact('notices','clients','teams','testomonials','visits'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        $projects= Project::orderBy('priority')->get();
        return view('projects',compact('projects'));
    }


    public function service()
    {
        return view('service');
    }

    public function blogs()
    {
        $blogs=Blog::orderBy('priority')->get();
        return view('blogs',compact('blogs'));
    }

    public function viewblogs($id)
    {
        $blog=Blog::find($id);
        $related= Blog::where('id','!=',$id)->orderBy('blog_date','desc')->get();
        return view('viewblogs',compact('blog','related'));
    }



    public function products()
    {
        $products=Product::all();
        return view('products',compact('products'));
    }



    public function visit()
    {
        if (!Session::has('visit')) {

            $last_date = Visit::latest('visit_date')->first();
            $visit_date = date('Y-m-d');
            if ($last_date) {
                if ($last_date->visit_date != $visit_date) {
                    $no_of_visits = 1;
                    $d = new Visit();
                    $d->visit_date = $visit_date;
                    $d->no_of_visits = $no_of_visits;
                    $d->save();
                } else {
                    $newvisit = $last_date->no_of_visits + 1;
                    Visit::where('visit_date', $visit_date)->update(['no_of_visits' => $newvisit]);
                }
            } else {
                $no_of_visits = 1;
                $d = new Visit();
                $d->visit_date = $visit_date;
                $d->no_of_visits = $no_of_visits;
                $d->save();
            }
            Session::put('visit', 'yes');
            Session::save();
        }
    }
}

