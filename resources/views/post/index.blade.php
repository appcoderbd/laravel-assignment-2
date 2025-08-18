@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="px-6 py-2 flex items-center justify-between">
        <p>Welcome to your admin panel.</p>
        @if (session('status'))
            <div id="toast"
                class="fixed top-20 right-5 flex items-center justify-between w-72 py-3 px-4 bg-green-500 text-white rounded-2xl shadow-lg transition-opacity duration-500">

                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>{{ session('status') }}</span>
                </div>

                <!-- Close button -->
                <button onclick="document.getElementById('toast').remove()" class="ml-3 text-white hover:text-gray-200">
                    ✕
                </button>
            </div>

            <script>
                // ৩ সেকেন্ড পরে টোস্ট অটো হাইড হবে
                setTimeout(() => {
                    let toast = document.getElementById('toast');
                    if (toast) {
                        toast.style.opacity = '0';
                        setTimeout(() => toast.remove(), 500); // animation শেষে রিমুভ
                    }
                }, 3000);
            </script>
        @endif

        @if (session('success'))
            <div id="toast"
                class="fixed top-5 left-5 flex items-center justify-between w-72 py-3 px-4 bg-green-500 text-white rounded-2xl shadow-lg transition-opacity duration-500">

                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>

                <!-- Close button -->
                <button onclick="document.getElementById('toast').remove()" class="ml-3 text-white hover:text-gray-200">
                    ✕
                </button>
            </div>

            <script>
                // ৩ সেকেন্ড পরে টোস্ট অটো হাইড হবে
                setTimeout(() => {
                    let toast = document.getElementById('toast');
                    if (toast) {
                        toast.style.opacity = '0';
                        setTimeout(() => toast.remove(), 500); // animation শেষে রিমুভ
                    }
                }, 3000);
            </script>
        @endif

    </div>
        <div class="px-6 py-8">
            <div class="px-6 py-8 flex items-center justify-between">
                <h1 class="text-2xl font-bold">All Post</h1>
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
                                <button data-modal-target="popup-modal-{{ $post->id }}" data-modal-toggle="popup-modal-{{ $post->id }}" class="bg-red-500 hover:bg-red-700 px-4 py-2 rounded-2xl text-white">Delete</button>
                            </td>
                        </tr>

                        <!-- Open the modal using ID.showModal() method -->
                        <!-- Delete Alert Model-->
                            <div id="popup-modal-{{ $post->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-{{ $post->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this post item?</h3>
                                            <form method="post" action="{{ route('posts.destroy', $post->id) }}" >
                                                @csrf
                                                @method('DELETE')
                                                <button data-modal-hide="popup-modal-{{ $post->id }}" type="submit"
                                                    class="text-white
                                                    bg-red-600
                                                    hover:bg-red-800
                                                    focus:ring-4 focus:outline-none
                                                    focus:ring-red-300
                                                        dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                        Yes, I'm sure
                                                </button>

                                            </form>
                                            <button data-modal-hide="popup-modal-{{ $post->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Delete Alert Model-->

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $posts->links('pagination::tailwind') }}
    </div>


@endsection
