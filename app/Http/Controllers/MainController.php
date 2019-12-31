<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class MainController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getState($state)
    {
        $projects = Project::where('state', $state)->get();
        return view('main')->with('projects', $projects);
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('show')->with('project', $project);
    }
    public function delete($id)
    {
        $project = Project::find($id);

        if($project->delete()){
            return view('home')->with('status', 'Project has been deleted');
        }else{
            return view('show')->with('status', 'Error deleting project');
        }
    }
    public function add()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->percentage = $request->percentage;
        $project->function = $request->function;
        $project->amount = $request->amount;
        $project->date = $request->date;
        $project->abandoned = $request->abandoned;
        $project->lat = $request->lat;
        $project->long = $request->long;
        $project->state = $request->state;
        $project->lga = $request->lga;
        $project->community = $request->community;
        $project->sponsor = $request->sponsor;
        $project->contractor_name = $request->contractor_name;
        $project->contractor_address = $request->contractor_address;
        $project->contractor_phone = $request->contractor_phone;
        $project->user_id = Auth::user()->id;
        if($project->save())
        {
            return view('add')->with(['status1'=>'success','status'=>'Project added successfully']);
        }else{
            return view('add')->with(['status1'=>'danger','status'=>'Error adding project']);
        }
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('edit')->with('project', $project);
    }
    public function update(Request $request)
    {
return null;
    }
}
