@extends('layouts.main')
@section('content')
  @foreach ($categories as $c)
    <a href="/category/{{ $c->slug }}" class="btn btn-warning rounded-pill">{{ $c->name }}</a>
  @endforeach
@endSection
