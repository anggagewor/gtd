<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::paginate();
        return view('project.index', compact('projects'));
    }

    public function store(Request $request)
    {
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'start_at' => date('Y-m-d H:i:s'),
            'end_at' => date('Y-m-d H:i:s'),
            'status_id' => 1,
        ]);
        return redirect()->back();
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project.show', compact('project'));
    }
}
