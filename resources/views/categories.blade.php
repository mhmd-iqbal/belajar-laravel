@extends('layouts.main')
@section('content')
  <h3>Halaman Categories</h3>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center mt-3">
    @foreach ($categories as $c)
      <div class="col">
        <a href="/posts?category={{ $c->slug }}">
          <div class="card text-white shadow">
            <img src="https://source.unsplash.com/500x500?{{ $c->name }}" class="card-img"
              alt="{{ $c->name }}">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title flex-fill p-4 text-center" style="background-color: rgba(0, 0, 0, 0.7)">
                {{ $c->name }}</h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
@endSection
