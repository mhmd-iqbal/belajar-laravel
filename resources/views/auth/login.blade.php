@extends('layouts.main')
@section('content')
  <div class="row justify-content-center pt-2">
    <h3 class="mb-4 text-center">Login Page</h3>
    <div class="col-md-5">

      @if (session()->has('message'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          {{ session('message') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form action="/auth/login" method="post">
        @csrf
        <div class="form-floating mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
            placeholder="name@example.com" required value="{{ old('email') }}" autocomplete="off">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
            id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign in</button>
      </form>
      <p class="mt-2 text-center">Not a member? <a href="/auth/register">Register here!</a></p>
    </div>
  </div>
@endsection
