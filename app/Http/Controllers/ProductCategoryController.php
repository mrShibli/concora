<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('layouts.admin.product-category.index', compact('categories'));

    } //End Method

    public function create()
    {
        return view('layouts.admin.product-category.create');

    } //End Method

    public function store(Request $request)
    {
        ProductCategory::insert([
            'name' =>$request->name,
            'slug' =>strtolower(str_replace(' ', '-', $request->name)),
            'status' => $request->status == 'active' ? 'active' : 'inactive'
        ]);

        return redirect()->route('admin.pcategory.index')->with('success', 'Product Category Created Successfully!');
    } //End Method

    public function edit($id)
    {
        $pCategory = ProductCategory::findOrFail($id);
        return view('layouts.admin.product-category.edit', compact('pCategory'));
    } //End Method

    public function update(Request $request)
    {
        $cat_id  = $request->id;

        ProductCategory::findOrFail($cat_id)->update([
            'name' =>$request->name,
            'slug' =>strtolower(str_replace(' ', '-', $request->name)),
            'status' => $request->status == 'active' ? 'active' : 'inactive'
         ]);

         return redirect()->route('admin.pcategory.index')->with('success', 'Product Category Updated');
    } //End Method

    public function destroy($id)
    {
        $pcategory = ProductCategory::findOrFail($id);
        $pcategory->delete();
        
        return redirect()->route('admin.pcategory.index');
    } //End Method
}
