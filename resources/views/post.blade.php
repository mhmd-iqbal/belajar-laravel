@extends('layouts.main')
@section('content')
  <article>
    <h3>{{ $post->title }}</h3>
    <p>Posted by Muhammad Iqbal in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
  </article>

  <a href="/posts">Back to Posts</a>
@endsection
