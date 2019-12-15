@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbts2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/13129274_1719811661623643_1500093578_a.jpg?_nc_ht=instagram.fbts2-1.fna.fbcdn.net&oh=f97f479f521c0cb92a803eb45a379d54&oe=5EB03E1B" class="rounded-circle">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>32</strong> followers</div>
                <div class="pr-5"><strong>1</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="">{{ $user->profile->description }}</div>
            <div><a href="">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img class="w-100 pt-4" src="/storage/{{ $post->image}}">
            </a>
        </div>          
        @endforeach
    </div>
</div>
@endsection
