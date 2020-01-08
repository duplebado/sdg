<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::all();
        $users = User::all();
        $createdPro = Project::where('user_id', auth()->user()->id)->count();
        $contractors = Project::distinct('contractor_name')->count('contractor_name');
        return view('home')->with(['projects'=> $projects,'users' => $users, 'contractors'=>$contractors, 'createdPro'=>$createdPro]);
    }

}
