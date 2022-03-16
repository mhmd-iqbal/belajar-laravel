@extends('layouts.main')
@section('content')
  <h1>Halaman About</h1>
  <img src="img/{{ $gambar }}" alt="{{ $nama }}" width="200">
  <p>{{ $nama }}</p>
  <p>{{ $email }}</p>
  <p>{{ $github }}</p>
@endsection
