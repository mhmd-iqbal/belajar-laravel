@extends('layouts.main')
@section('content')
  <h3>Halaman About</h3>
  <img src="img/{{ $gambar }}" alt="{{ $nama }}" width="200">
  <p>{{ $nama }}</p>
  <p>{{ $email }}</p>
  <p>{{ $github }}</p>
@endsection
