@extends('layouts.main')
@section('content')
  <h3 class="text-center">{{ $title }}</h3>
  <form action="/dashboard/posts/store" method="post">
    <div class="row justify-content-center mt-3 pb-4">
      @csrf
      <div class="col-md-6">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" name="slug" id="slug">
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select name="category" id="category" class="form-select">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="excerpt" class="form-label">Excerpt</label>
          <textarea class="form-control" name="excerpt" id="excerpt" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>
        <div class="row">
          <div class="col"><button type="submit" class="btn btn-success w-100">Save</button></div>
          <div class="col"><button type="reset" class="btn btn-outline-danger w-100">Reset</button></div>
        </div>
      </div>
    </div>
  </form>
@endsection
