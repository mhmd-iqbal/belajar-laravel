@extends('layouts.main')
@section('content')
  <a href="/dashboard/posts/create" class="btn btn-dark">New Post</a>
  <div class="table-responsive mt-3">
    <table class="table-hover table-sm table">
      <thead class="bg-primary text-white">
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
              <div class="btn-group">
                <a href="/dashboard/posts/{{ $p->slug }}" class="btn btn-sm btn-success">Detail</a>
                <a href="/dashboard/posts/destroy/{{ $p->slug }}" class="btn btn-sm btn-danger">Delete</a>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
