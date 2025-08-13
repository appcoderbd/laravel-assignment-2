@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-sm">

    <h3 class="text-2xl font-bold mb-6 text-gray-800">Add Category</h3>

    @if (session('status'))
        <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg border border-green-300">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('category.store') }}">
        @csrf

        {{-- Category Name --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Category Name <span class="text-red-500">*</span>
            </label>
            <input type="text" name="name" placeholder="Health"
                value="{{ old('name') }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 @error('name') border-red-500 @enderror">

            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Category Slug --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Category Slug <span class="text-red-500">*</span>
            </label>
            <input type="text" name="slug" placeholder="category-slug"
                value="{{ old('slug') }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 @error('slug') border-red-500 @enderror">

            @error('slug')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit Button --}}
        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md transition">
                Create
            </button>
        </div>
    </form>
</div>
@endsection
