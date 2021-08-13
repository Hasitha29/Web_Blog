@extends('layouts.app')
@section('content')
<table class="table table-hover">
@if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
  </button>
</div>

                    @endif
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($posts as $post)
  <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->description }}</td>
      <td>
          <a href="{{route('post.edit', $post->id)}}" class="btn btn-sm btn-primary">Edit</a>
          <a href="{{route('post.delete', $post->id)}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
  @endforeach

  </tbody>
</table>
@endsection
