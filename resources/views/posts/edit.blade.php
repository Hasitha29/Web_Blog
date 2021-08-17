@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

<form method="post" action="{{route('post.update', $post->id)}}">
    @csrf
  <div class="form-group">
    <label>Edit Post Title</label>
    <input type="tex" class="form-control" name="title"  placeholder="Enter post title">
 </div>
 <div class="form-group">
    <label>Edit Post Description</label>
    <textarea class="form-control" name="description" placeholder="Enter Post Description" rows="10"></textarea>
</div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
