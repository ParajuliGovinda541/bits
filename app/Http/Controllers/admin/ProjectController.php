<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index()
    {
        $projects= Project::orderBy('priority')->get();
        return view('admin.project.index',compact('projects'));
    }
}
