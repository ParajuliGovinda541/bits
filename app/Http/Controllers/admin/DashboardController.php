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
use Illuminate\Http\Request;

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
        $visits= Visit::count();
        return view("dashboard",compact("notices","banners","categories","clients","teams","testo","visits"));
    }
}
