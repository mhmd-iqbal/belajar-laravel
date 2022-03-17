@extends('layouts.main')
@section('content')
  <h1>Halaman Blog</h1>
  @foreach ($posts as $post)
    <article class="mb-4">
      <h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
      <p>Posted by Muhammad Iqbal in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
      </p>
      <p>{{ $post->excerpt }} <a href="/post/{{ $post->slug }}">[readmore]</a></p>
    </article>
  @endforeach
@endsection
