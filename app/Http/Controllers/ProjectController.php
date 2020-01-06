<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.all')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        if($project->save())
        {
            return view('project.create')->with(['status1'=>'success','status'=>'Project added successfully']);
        }else{
            return view('project.create')->with(['status1'=>'danger','status'=>'Error adding project']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('project.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
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
        if($project->save())
        {
            return view('project.edit')->with(['status1'=>'success','status'=>'Project added successfully']);
        }else{
            return view('project.edit')->with(['status1'=>'danger','status'=>'Error adding project']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        if($project->delete()){
            return view('project.all')->with('status', 'Project has been deleted');
        }else{
            return view('project.show')->with('status', 'Error deleting project');
        }
    }
}
