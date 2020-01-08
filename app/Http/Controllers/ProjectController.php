<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;
use App\User;
use App\Image;
use DB;
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
        $project->user_id = Auth::user()->id;
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
        if($project->user_id == 0){
            $project->created_by = 'System';
        }else{
            $project->created_by = User::findOrFail($project->user_id)->value('name');
        }
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
            return view('project.edit')->with(['project'=>$project,'status1'=>'success','status'=>'Project updated successfully']);
        }else{
            return view('project.edit')->with(['project'=>$project,'status1'=>'danger','status'=>'Error updating project']);
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
            // return view('project.all')->with('status', 'Project has been deleted');
            echo "deleted";
        }else{
            // return view('project.show')->with('status', 'Error deleting project');
            echo "error";
        }
    }
    public function imageUpload($id)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/projects'), $imageName);
        $image = new Image;
        $image->name = $imageName; 
        $image->title = request()->title;
        $image->caption = request()->caption;
        $image->project_id = $id;
        $image->save();
        return back()
            ->with('success','You have successfully upload image'.$id)
            ->with('image',$imageName);
    }
}
