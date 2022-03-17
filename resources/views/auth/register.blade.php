@extends('layouts.main')
@section('content')
  <div class="row justify-content-center pt-2">
    <h3 class="mb-4 text-center">Register Page</h3>
    <div class="col-md-5">
      <form action="/auth/register" method="post">
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
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username"
            placeholder="Username" required value="{{ old('username') }}" autocomplete="off">
          <label for="username">Username</label>
          @error('username')
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
        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
            placeholder="Full Name" required value="{{ old('name') }}" autocomplete="off">
          <label for="name">Full Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100 my-3">Sign in</button>
      </form>
      <p class="mt-2 text-center">Already registered? <a href="/auth/login">Login here!</a></p>
    </div>
  </div>
@endsection
