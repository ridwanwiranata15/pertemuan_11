<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Status;
use App\Models\Category;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('Task.index', [
            'tasks' => $tasks
        ]);
    }
    public function detail($id){
        $task = Task::find($id);
        return  view('Task.detail', [
            'task' => $task
        ]);
    }
    public function list()
    {
        $tasks = Task::all();
        return view('Task.list', compact('tasks'));
    }
    public function create(){
        $status = Status::all();
        $categories = Category::all();
        return view('Task.create', ['status' => $status, 'categories' => $categories]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'deadline' => 'required',
            'status_id' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);
        Task::create($data);
        return redirect('/tasks/list');
    }
    public function edit($id){
        $task = Task::find($id);
        return view('Task.edit', ['task' => $task]);
    }
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $data = $request->validate([
            'name' => 'required',
            'deadline' => 'required',
            'status_id' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);
        $task->update($data);
        return redirect('/tasks/list');

    }
    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks/list');
    }
}
