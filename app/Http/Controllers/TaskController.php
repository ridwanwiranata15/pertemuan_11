<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        dd($tasks);
        // return view('Task.index', [
        //     'tasks' => $tasks
        // ]);
    }
    public function detail($id){
        $task = Task::getById($id);
        return  view('Task.detail', [
            'task' => $task
        ]);
    }
}
