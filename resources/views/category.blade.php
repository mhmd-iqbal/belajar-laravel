@extends('layouts.main')
@section('content')
  <h1>Kategori : {{ $category }}</h1>
  @foreach ($posts as $post)
    <article class="mb-4">
      <h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
      <p>Posted by Muhammad Iqbal</p>
      <p>{{ $post->excerpt }} <a href="/post/{{ $post->slug }}">[readmore]</a></p>
    </article>
  @endforeach

  <a href="/posts">Back to Posts</a>
@endsection
