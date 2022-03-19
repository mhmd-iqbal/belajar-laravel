@extends('layouts.main')
@section('content')
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }

  </style>

  <h3 class="text-center">{{ $title }}</h3>
  <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row justify-content-center mt-3 pb-4">
      <div class="col-md-8">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
            value="{{ old('title', $post->title) }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" readonly
            tabindex="-1" value="{{ old('slug', $post->slug) }}">
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label">Category</label>
          <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
            <option value="" disabled selected>Choose Options</option>
            @foreach ($categories as $category)
              @if (old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
          @error('category_id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input type="hidden" name="oldImage" value="{{ $post->image }}">
          @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
          @else
            <img class="img-preview img-fluid mb-3 col-sm-4">
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
            onchange="previewImage()">
          @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
          <trix-editor input="body" class="@error('body') is-invalid @enderror"></trix-editor>
          @error('body')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="row">
          <div class="col"><button type="submit" class="btn btn-success w-100">Update</button></div>
          <div class="col"><button type="reset" class="btn btn-outline-danger w-100">Reset</button></div>
        </div>
      </div>
    </div>
  </form>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    })

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
@endsection
