@extends('layouts.main')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h3 class="fs-3 mb-2">{{ $post->title }}</h3>
      <p>Posted by <a href="/posts?author={{ $post->user->username }}"
          class="text-decoration-none">{{ $post->user->name }}</a> in <a
          href="/posts?category{{ $post->category->slug }}"
          class="text-decoration-none">{{ $post->category->name }}</a></p>
      <div class="text-center">
        @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}" style="object-fit: cover; max-height: 400px;"
            class="card-img-top" alt="{{ $post->category->name }}">
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
            alt="{{ $post->category->name }}">
        @endif
      </div>
      <article class="my-4">
        {!! $post->body !!}
      </article>
      @if (auth()->check())
        <a href="/dashboard/posts">Back to Dashboard Posts</a>
      @else
        <a href="/posts">Back to Posts</a>
      @endif
    </div>
  </div>
@endsection
