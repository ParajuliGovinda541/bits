<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    
    public function index ()
    {
        $teams = Team::all();
        return view("admin.team.index",compact("teams"));
    }

    public function create ()
    {
        return view("admin.team.create");
    }

    public function store (Request $request)
    {
        // dd($request->all());
        $data= $request->validate([
        
            'name'=>'required',
            'position'=>'required',

            'team_image'=>'required|mimes:jpeg,png,jpg'
        ]);
        if($request->hasFile('team_image'))
        {
            $image=$request->file('team_image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/team');
            $image ->move($destinationPath,$name);
            $data['team_image']=$name;    
        }

        $team = Team::create($data);
        return redirect(route('admin.team.index'))->with('success','Team Created Successfully');
    }

    public function edit($id)
    {
        $team=Team::find($id);
        return view('admin.team.edit',compact('team'));
    }

    public function update (Request $request, $id)
    {
        $data= $request->validate([
        
            'name'=>'required',
            'position'=>'required',

            'team_image'=>'required|mimes:jpeg,png,jpg'
        ]);
        if($request->hasFile('team_image'))
        {
            $image=$request->file('team_image');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/team');
            $image ->move($destinationPath,$name);
            $data['team_image']=$name;    
        }
        $team = Team::find($id);
        $team= $team->update($data);
        return redirect(route('admin.team.index'))->with('success','Team Updated Sucessfullyy');
    }


    public function destroy(Request $request)
    {
        // dd($request->all());
        $team=Team::find($request->dataid);
        $team->delete();
        return redirect(route('admin.team.index'))->with('success','Team Deleted Sucessfully');
    }
}
