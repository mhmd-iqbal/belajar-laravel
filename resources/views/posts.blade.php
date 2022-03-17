@extends('layouts.main')
@section('content')
  <h1>Halaman Blog</h1>
  @foreach ($posts as $post)
    <article>
      <h3><a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a></h3>
      <p>{{ $post['body'] }}</p>
    </article>
  @endforeach
@endsection
