<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);

    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newCategory = Category::create($data);

        return redirect(route('category.index'));

    }

    public function edit(Category $categories){
        return view('category.edit', ['categories' => $categories]);
    }

    public function update(Category $categories, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $category->update($data);

        return redirect(route('category.index'))->with('success', 'Category Updated Succesffully');

    }

    public function destroy(Category $categories){
        $category->delete();
        return redirect(route('category.index'))->with('success', 'Category deleted Succesffully');
    }
}
