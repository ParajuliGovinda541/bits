<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\category;
use App\Models\Client;
use App\Models\Notice;
use App\Models\Team;
use App\Models\Testomonial;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $notices= Notice::count();
        $banners= Banner::count();
        $categories= category::count();
        $clients= Client::count();
        $teams= Team::count();
        $testo= Testomonial::count();
        $date= Carbon::today()->subDays(30);
        $totalvisits=Visit::sum('no_of_visits');
        $visitdate=Visit::where('visit_date','>=',$date)->pluck('visit_date');
        $visits= Visit::where('visit_date','>=',$date)->pluck('no_of_visits');
        return view("dashboard",compact("notices","banners","categories","clients","teams","testo","visits",'totalvisits','visitdate'));
    }

    public function sendMail()
    {
        $data=[
            'name'=> 'Govinda',
            'body'=> 'Hello',
        ]
        ;
        Mail::send('email.testmail', $data, function ($message) {
            $message->to('parajuligovinda541@gmail.com')->subject('Test Mail');
        });
    }
}
