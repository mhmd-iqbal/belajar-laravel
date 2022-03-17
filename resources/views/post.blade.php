@extends('layouts.main')
@section('content')
  <article>
    <h3><a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a></h3>
    <p>{{ $post['body'] }}</p>
  </article>

  <a href="/posts">Back to posts</a>
@endsection
