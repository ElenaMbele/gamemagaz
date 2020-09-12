<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function edit(Category $category)
    {
      return view('category.editForm', ['category' => $category]);
    }

    public function save(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('main');
    }

    public function delete(Category $category) {
        $category->delete();
        return redirect()->route('main');
    }

    public function showAddForm()
    {
        return view('category.addForm');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('main');
    }
}
