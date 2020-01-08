<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
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
        return view('main')->with(['state'=> $state,'projects'=> $projects]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getProject($id)
    {
        $project = Project::findOrFail($id);
        if($project->user_id == 0){
            $project->created_by = 'System';
        }else{
            $project->created_by = User::findOrFail($project->user_id)->value('name');
        }
        return view('project')->with('project', $project);
    }

}