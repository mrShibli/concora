<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('layouts.admin.category.index', compact('categories'));

    } //End Method

    public function create()
    {
        return view('layouts.admin.category.create');

    } //End Method


    public function store(Request $request)
    {
        Category::insert([
            'name' =>$request->name,
            'slug' =>strtolower(str_replace(' ', '-', $request->name)),
            'status' => $request->status == 'active' ? 'active' : 'inactive'
        ]);

        return redirect()->route('admin.category.index');
    } //End Method


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        return redirect()->route('admin.category.index');
    } //End Method

    public function edit($id)
    {
        $editCategory = Category::findOrFail($id);
        return view('layouts.admin.category.edit', compact('editCategory'));
    } //End Method

    public function update(Request $request)
    {
        $cat_id  = $request->id;

         Category::findOrFail($cat_id)->update([
            'name' =>$request->name,
            'slug' =>strtolower(str_replace(' ', '-', $request->name)),
            'status' => $request->status == 'active' ? 'active' : 'inactive'
         ]);

         return redirect()->route('admin.category.index');
    } //End Method
}
