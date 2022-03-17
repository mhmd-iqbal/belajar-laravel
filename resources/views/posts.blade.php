@extends('layouts.main')
@section('content')
  <h1>Halaman Blog Posts</h1>
  @foreach ($posts as $post)
    <article class="border-bottom my-4">
      <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
      <p>Posted by <a href="/authors/{{ $post->user->username }}/posts"
          class="text-decoration-none">{{ $post->user->name }}</a>
        in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
      </p>
      <p>{{ $post->excerpt }} <a href="/post/{{ $post->slug }}" class="text-decoration-none">[readmore]</a></p>
    </article>
  @endforeach
@endsection
