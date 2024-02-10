<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    //

    public function index()
    {
        $projects= Project::orderBy('priority')->get();
        return view('admin.project.index',compact('projects'));
    }

    public function create()
    {

        return view('admin.project.create ');
    }

    public function store(Request $request)

    {
        $data= $request->validate([
            'title'=> 'required',
            'image'=> 'required',
            'priority'=> 'required',
            'descripton'=> 'required',

        ]);

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/projects');
            $image ->move($destinationPath,$name);
            $data['image']=$name;    
            
        }
        $project= Project::create($data);
        return redirect()->route('admin.project.index')->with('success','Project Created Sucessfully');

    }

    public function edit($id)

    {
        $project= Project::find($id);
        return view('admin.project.edit',compact('project'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);

        $project= Project::find($id);
        $data= $request->validate([
            'title'=> 'required',
            'image'=> 'required',
            'priority'=> 'required',
            'descripton'=> 'required',

        ]);

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/projects');
            $image ->move($destinationPath,$name);
            File::delete('images/projects/'.$project->image);
            $data['image']=$name;    
            
        }
         $project->update($data);
        // return redirect()->route('admin.project.update')->with('success','Project Updated Sucessfully');
        return redirect(route('admin.project.index',compact('project')))->with('success','project Updated Successfully');


    }

    public function destroy(Request $request)
    {
        $team=Project::find($request->dataid);
        $team->delete();
        return redirect(route('admin.project.index'))->with('success','Project Deleted Sucessfully');
    }


}
