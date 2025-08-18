<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Categorie;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::paginate(5);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Categorie::get()->all();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(PostRequest $request)
    {


        $validated = $request->validated();


        if ($request->hasFile('post_images')) {
            $filePath = $request->file('post_images')->store('post_images','public');
            $validated['post_images'] = $filePath;
        }


        try {

            Post::create($validated);
            return redirect()->route('posts.index')->with('status','Post Create Successfully');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['status' => 'Post Create Failed']);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('post.item', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $validated = $request->validated();

        if ($request->hasFile('post_images')) {
            // আগের ইমেজ থাকলে ডিলিট করো
            $oldImagePath = public_path($post->post_images); // কারণ ডাটাবেসে পাথসহ সেভ করা আছে
            if ($post->post_images && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // নতুন ইমেজ সেভ করো
            $file = $request->file('post_images');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); // unique name
            $filePath = 'post_images/' . $fileName; // ডাটাবেসে পাথসহ সেভ হবে

            $file->move(public_path('post_images'), $fileName);

            $validated['post_images'] = $filePath;
        } else {
            // নতুন ইমেজ না দিলে আগেরটাই থাকবে
            $validated['post_images'] = $post->post_images;
        }

        $post->update($validated);

        return redirect()->route('posts.index')->with('status', 'Post updated successfully 🚀');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->back()->with('success','Post Delete Successfully');
    }
}