<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Status;
use App\Models\Category;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project.index', ['projects' => Project::all()]);
    }
    public function create()
    {
        $status = Status::all();
        $categories = Category::all();
        return view('project.create', ['status' => $status, 'categories' => $categories]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status_id' => 'required',
            'categories_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        Project::create($data);
        return redirect()->route('project.index');
    }
    public function edit($id)
    {
        $status = Status::all();
        $categories = Category::all();
        $project = Project::find($id);
        return view('project.edit',['project' => $project, 'status' => $status, 'categories' => $categories]);
    }
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status_id' => 'required',
            'categories_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $project->update($data);
        return redirect()->route('project.index');
    }
    public function delete($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('project.index');
    }
}
