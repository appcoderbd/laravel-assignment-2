@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
  <!-- Content here -->
<div>
    <h3>Category Add</h3>
</div>

    @if (session('status'))
        <div class="text-success" >
            {{ session('status')}}
        </div>
    @endif
  <form method="POST" action="{{ route('category.store') }}">
    @csrf
    <div class="form-group">
      <label>Category Name:<span class="text-danger"> * </span></label>
      <input type="text" name="name" class="form-control"  placeholder="Health" value="{{ old('name') }}">
    </div>
    @error('name')
        <div class="text-danger" >
            {{ $message }}
        </div>
    @enderror
    <div class="form-group mt-3">
      <label>Category Slug:<span class="text-danger"> * </span> </label>
      <input type="text" name="slug" class="form-control" placeholder="category-slug" value="{{ old('slug') }}" >
    </div>
    @error('slug')
        <div class="text-danger" >
            {{ $message }}
        </div>
    @enderror
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-success">Create</button>
    </div>
  </form>
</div>


@endsection
