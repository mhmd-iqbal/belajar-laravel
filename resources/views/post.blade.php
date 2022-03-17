p@extends('layouts.main')
@section('content')
  <article>
    <h3>{{ $post->title }}</h3>
    <p>Posted by <a href="/authors/{{ $post->user->username }}/posts"
        class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}"
        class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
  </article>

  <a href="/posts">Back to Posts</a>
@endsection
