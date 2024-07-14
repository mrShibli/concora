<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('layouts.admin.posts.index', compact('posts'));
        
    }  //End Method


    public function create()
    {
        $categories = Category::all();
        return view('layouts.admin.posts.create', compact('categories'));
    } //End Method

    public function store(Request $request)
    {
        // Validate the form data
       $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'features_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle file upload
        $post = new Post();
        $post->title = $request->title;
        $post->slug = strtolower(str_replace(' ', '-', $request->title));
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->status = $request->status == 'active' ? 'active': 'inactive';
        $post->created_at = Carbon::now();
        $post->user_id = Auth::user()->id;
      

        if($request->hasfile('features_img'))
        {
            $file = $request->file('features_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/posts/', $filename);
            $post->features_img = $filename;
        }

        $post->save();

        // Redirect to a success page or do something else
        return redirect()->route('admin.post.index');
    }


    //tinyMCE editor image upload method
    public function uploadImg(Request $request)
    {
    
        $IMGfile = $request->file;
        $extenstion = $IMGfile->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $IMGfile->move('uploads/posts/', $filename);

        $baseUrl = url('/').'/uploads/posts/'.$filename;
        return response()->json([
            'location' => $baseUrl
        ]);    

    } //End Method

    public function edit($id)
    {
        $editPost = Post::findOrFail($id);
        $categories = Category::where('status', 'active')->get();
        return view('layouts.admin.posts.edit', compact('editPost', 'categories'));

    } //End Method

    public function update(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'category_id' => 'required|exists:categories,id',
        'status' => 'required|in:active,inactive',
    ]);

    // Find the post to update
    $post = Post::findOrFail($id);

    // Update the post properties
    $post->title = $request->title;
    $post->slug = strtolower(str_replace(' ', '-', $request->title));
    $post->short_description = $request->short_description;
    $post->description = $request->description;
    $post->category_id = $request->category_id;
    $post->status = $request->status == 'active' ? 'active' : 'inactive';

    // Handle file upload if a new image is provided
    if ($request->hasFile('features_img')) {
        $request->validate([
            'features_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $file = $request->file('features_img');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move('uploads/posts/', $filename);

        // Delete the old image if it exists
        if ($post->features_img) {
            $oldImagePath = public_path('uploads/posts/' . $post->features_img);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Update the image path in the database
        $post->features_img = $filename;
    }

    // Save the updated post
    $post->save();

    // Redirect to a success page or do something else
    return redirect()->route('admin.post.index');
}


public function destroy($id)
{
    $post = Post::findOrFail($id);

    // Delete the associated image if it exists
    if ($post->features_img) {
        $imagePath = public_path('uploads/posts/' . $post->features_img);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    $post->delete();

    return redirect()->route('admin.post.index')->with('success', 'Post deleted successfully.');
}





 

    

   
    
}
