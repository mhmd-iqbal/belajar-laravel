@extends('layouts.main')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h3 class="fs-3 mb-2">{{ $post->title }}</h3>
      <p>Posted by <a href="/authors/{{ $post->user->username }}/posts"
          class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}"
          class="text-decoration-none">{{ $post->category->name }}</a></p>
      <div class="text-center">
        <img src="https://source.unsplash.com/1000x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
          class="img-fluid" />
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
