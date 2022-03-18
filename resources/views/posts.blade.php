@extends('layouts.main')
@section('content')
  <h3>{{ $title }}</h3>


  <div class="row justify-content-center my-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn btn-dark" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count() > 0)
    <div class="card my-3 text-center shadow-sm">
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
        alt="{{ $posts[0]->category->name }}">
      <div class="card-body">
        <h3 class="card-title">{{ $posts[0]->title }}</h3>
        <p>Posted by <a href="/posts?author={{ $posts[0]->user->username }}"
            class="text-decoration-none">{{ $posts[0]->user->name }}</a>
          in <a href="/posts?category={{ $posts[0]->category->slug }}"
            class="text-decoration-none">{{ $posts[0]->category->name }}</a> - <small
            class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  @else
    <p class="text-muted fs-4 text-center">No data for display.</p>
  @endif

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
    @foreach ($posts->skip(1) as $post)
      <div class="col">
        <div class="card">
          <div class="position-absolute bg-dark px-3 py-2">
            <a href="/posts?category={{ $post->category->slug }}"
              class="text-decoration-none text-white">{{ $post->category->name }}</a>
          </div>
          <img src="https://source.unsplash.com/1000x600?{{ $post->category->name }}" class="card-img-top"
            alt="{{ $post->category->name }}">
          <div class="card-body">
            <h5 class="card-title"><a href="/post/{{ $post->slug }}"
                class="text-decoration-none">{{ $post->title }}</a></h5>
            <p><small>Posted by <a href="/posts?author={{ $post->user->username }}"
                  class="text-decoration-none">{{ $post->user->name }}</a> -
                {{ $post->created_at->diffForHumans() }}</small>
            </p>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-auto">
      {{ $posts->links() }}
    </div>
  </div>
@endsection
