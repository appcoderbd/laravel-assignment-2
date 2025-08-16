@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<p>Welcome to your admin panel.</p>
        <div class="px-6 py-8">
            <div class="px-6 py-8 flex items-center justify-between">
                <h1 class="text-2xl font-bold">All Categories</h1>
                <a href="{{ route('posts.create') }}" class="bg-sky-500 hover:bg-sky-700 px-4 py-2 rounded-2xl text-white">
                    Create New Post
                </a>
            </div>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100 border-b mb-2">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Id</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Image</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Title</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Category</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">

                    @foreach ($posts as $post)
                        <tr class="hover:bg-gray-50 align-top">
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $post->id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">
                                <img src="{{ asset('storage/' . $post->post_images) }}"
                                    alt="Post Image"
                                    class="w-10 h-10 object-cover rounded-md">
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $post->title }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $post->category->name }}</td>
                            <td class="flex space-x-3 px-6 py-4">
                                <a href="{{ route('posts.edit', $post->id) }}" class="bg-sky-500 hover:bg-sky-700 px-4 py-2 rounded-2xl text-white">Edit</a>
                                <a href="{{ route('posts.show' , $post->id) }}" class="bg-sky-500 hover:bg-sky-700 px-4 py-2 rounded-2xl text-white">View</a>
                                <a href="{{ route('posts.destroy', $post->id) }}" class="bg-red-500 hover:bg-red-700 px-4 py-2 rounded-2xl text-white">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $posts->links('pagination::tailwind') }}
    </div>


@endsection
