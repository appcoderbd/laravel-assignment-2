<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Categorie;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

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
            return redirect()->back()->with('status','Post Create Successfully');

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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
