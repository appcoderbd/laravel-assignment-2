@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<p>Welcome to your admin panel.</p>
    <div class="px-6 py-8">
        <h1 class="text-2xl font-bold mb-6">Latest Post</h1>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Image</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Title</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Category</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($latestPosts as $latestPost)

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">
                            <div class="flex">
                                <img
                                    src="{{ asset('storage/' . $latestPost->post_images) }}"
                                    alt="Profile Image"
                                    class="w-15 h-15 rounded-full object-cover border-2 border-gray-300 shadow"/>
                            </div>

                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $latestPost->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $latestPost->category->name }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection
