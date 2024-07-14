<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return view('layouts.admin.product.index', compact('products'));

    }//End Method

    public function create()
    {
        $pcategories = ProductCategory::all();
        return view('layouts.admin.product.create', compact('pcategories'));

    } //End Method

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'short_desc' => 'required|string',
            'description' => 'required|string',
            'product_category_id' => 'required|exists:product_categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
            'status' => 'required|in:active,inactive',
        ]);
    
        // Upload main image
        $imagePath = $request->file('image')->store('product_images', 'public');
    
        // Prepare gallery images data
        // $galleryImages = [];
        // if ($request->hasFile('gallery_img')) {
        //     foreach ($request->file('gallery_img') as $image) {
        //         $galleryImagePath = $image->store('product_gallery_images', 'public');
        //         $galleryImages[] = $galleryImagePath;
        //     }
        // }
    
        // Create the product record
        $product = new Product([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'image' => $imagePath,
            'short_desc' => $validatedData['short_desc'],
            'description' => $validatedData['description'],
            'product_category_id' => $validatedData['product_category_id'],
            // 'gallery_img' => json_encode($galleryImages),
            'status' => $validatedData['status'],
        ]);
    
        // Save the product
        $product->save();
    
        // Redirect back with success message
        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();

        return view('layouts.admin.product.edit', compact('product', 'categories'));

    } //End Methods



public function destroy($id)
{
    try {
        // Fetch the product by its ID
        $product = Product::findOrFail($id);

        // Delete the main image file from storage
        Storage::delete($product->image);

        // Delete the gallery images files from storage
        // if ($product->gallery_img) {
        //     $galleryImages = json_decode($product->gallery_img);
        //     foreach ($galleryImages as $galleryImage) {
        //         Storage::delete($galleryImage);
        //     }
        // }

        // Delete the product record from the database
        $product->delete();

        // Redirect back with success message
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    } catch (\Exception $e) {
        // Log the error message
        Log::error('Error deleting product: ' . $e->getMessage());

        // Redirect back with error message
        return redirect()->back()->with('error', 'Error deleting product. Please try again.');
    }

} //End Method


}
