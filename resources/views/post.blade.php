@extends('layouts.main')
@section('content')
  <article>
    <h3>{{ $post->title }}</h3>
    {!! $post->body !!}
  </article>

  <a href="/posts">Back to posts</a>
@endsection
