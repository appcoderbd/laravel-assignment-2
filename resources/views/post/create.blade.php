@extends('layouts.app')
@section('title','Create Post')


@section('content')


<div class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-1/2 bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-4">Create Post</h1>
        <p class="text-gray-700 text-center mb-6">Create a dummy post 🚀</p>

        @if (session('status'))
        <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg border border-green-300">
            {{ session('status') }}
        </div>
        @endif

        <form class="space-y-5" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" placeholder="Enter post title"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <!-- Category -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Category</label>
                <select name="category_id"
                    class="w-full px-4 py-2 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option>Select a category</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" >{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </div>

            @error('category_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <!-- Description -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="content" rows="4" placeholder="Write your description..."
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <!-- Image Upload -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Image</label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16V4m0 0L3 8m4-4l4 4M21 8v8m0 0l-4-4m4 4l4-4"></path>
                            </svg>
                            <p class="text-sm text-gray-500">Click to upload or drag & drop</p>
                        </div>
                        <input id="dropzone-file" name="post_images" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            @error('post_images')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <!-- Submit -->
            <div class="flex justify-end space-x-3">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 gap-2 rounded-lg shadow-md transition">
                    Create Post
                </button>
                 <a href="{{ route('posts.index') }}"
                    class="bg-violet-500 hover:bg-violet-600 text-white px-6 py-2 gap-3 rounded-lg shadow-md transition">
                    Back
                </a>
            </div>
        </form>
    </div>
</div>



@endsection
