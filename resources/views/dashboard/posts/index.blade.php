@extends('layouts.main')
@section('content')
  @if (session()->has('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <a href="/dashboard/posts/create" class="btn btn-dark">New Post</a>
  <div class="table-responsive mt-3">
    <table class="table-hover table-sm table">
      <thead>
        <th>#</th>
        <th>Title</th>
        <th>Category</th>
        <th>Published At</th>
        <th>Action</th>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($posts as $p)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->category->name }}</td>
            <td>{{ $p->created_at }}</td>
            <td>
              <a href="/dashboard/posts/{{ $p->slug }}" class="btn btn-sm btn-success">Detail</a>
              <a href="/dashboard/posts/{{ $p->slug }}/edit" class="btn btn-sm btn-dark">Edit</a>
              <form action="/dashboard/posts/{{ $p->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-sm btn-danger"
                  onclick="return confirm('Are you sure?')">Delete</button>
              </form>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
