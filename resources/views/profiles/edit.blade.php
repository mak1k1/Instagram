@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <h1>Edit profile</h1>
        </div>
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">Title</label>

            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label">Description</label>

            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label">URL</label>

            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

            @error('url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post Caption</label>
            <input id="image" type="file" class="form-control-file" name="image">
            @error('image')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="row pt-4">
            <button class="btn btn-primary">Save Profile</button>
        </div>
    </form>
</div>
@endsection
