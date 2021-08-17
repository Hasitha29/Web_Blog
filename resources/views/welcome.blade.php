@extends('layouts.frontent')
@section('content')


      <div class="row mb-2 opacity-50">

        @foreach ($posts as $post)
        <div class="col-md-6 opacity-50">
            <div class="card flex-md-row mb-4 box-shadow">
              <div class="card-body d-flex flex-column align-items-start opacity-50">
                  <img src="{{ asset('thumbnails/' . $post->thumbnail) }}" class="img-thumbnail" alt="Thumbnail">
                <h2 class="mb-0 mt-2">
                  <p class="text-success">{{ $post->title }}</p>
                </h3>
                <div class="mb-1 text-muted">{{ date('Y-m-d', strtotime($post->created_at)) }}</div>
                <p class="card-text mb-auto">{{ $post->description }}</p>
                <a href="{{ route('post.show', $post->id) }}">Continue reading</a>
              </div>
            </div>
          </div>
        @endforeach


    </div>
@endsection

