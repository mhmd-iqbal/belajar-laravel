@extends('layouts.main')
@section('content')
  <h3>Kategori : {{ $category_name }}</h3>
  @foreach ($posts as $post)
    <article class="border-bottom my-4">
      <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
      <p>Posted by <a href="/posts?author={{ $post->user->username }}/posts"
          class="text-decoration-none">{{ $post->user->name }}</a></p>
      <p>{{ $post->excerpt }} <a href="/post/{{ $post->slug }}" class="text-decoration-none">[readmore]</a></p>
    </article>
  @endforeach

  <a href="/posts">Back to Posts</a>
@endsection
