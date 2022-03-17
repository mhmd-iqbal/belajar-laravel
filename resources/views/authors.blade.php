@extends('layouts.main')
@section('content')
  <h3>Halaman Author</h3>
  @foreach ($authors as $author)
    <nav class="nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/authors/{{ $author->username }}/posts" class="nav-link">{{ $author->name }}</a>
        </li>
      </ul>
    </nav>
  @endforeach
@endSection
