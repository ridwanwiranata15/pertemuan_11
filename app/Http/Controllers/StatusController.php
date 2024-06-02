<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        return view('status.index', ['status' => Status::all()]);
    }
    public function create()
    {
        return view('status.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        Status::create($data);
        return redirect()->route('status.index');
    }
    public function edit($id)
    {
        $status = Status::find($id);
        return view('status.edit', compact('status'));
    }
    public function update(Request $request, $id)
    {
        $status = Status::find($id);
        $data = $request->validate([
            'name' => 'required'
        ]);
        $status->update($data);
        return redirect()->route('status.index');
    }
    public function delete($id)
    {
        $status = Status::find($id);
        $status->delete();
        return redirect()->route('status.index');
    }
}
