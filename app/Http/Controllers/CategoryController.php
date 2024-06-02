<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', ['category' => Category::all()]);
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        Category::create($data);
        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $data = $request->validate([
            'nama' => 'required'
        ]);
        $category->update($data);
        return redirect()->route('category.index');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
