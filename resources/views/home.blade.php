@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

<form method="post" action="{{route('post.store')}}">
    @csrf
  <div class="form-group">
    <label>Post Title</label>
    <input type="tex" class="form-control" name="title"  placeholder="Enter post title" required>
 </div>
 <div class="form-group">
    <label>Post Description</label>
    <textarea class="form-control" name="description" placeholder="Enter Post Description" rows="10" required></textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Post</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
