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
                <a href="">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>6</strong> posts</div>
                <div class="pr-5"><strong>32</strong> followers</div>
                <div class="pr-5"><strong>1</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="">{{ $user->profile->description }}</div>
            <div><a href="">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img class="w-100 pt-4" src="https://instagram.fbts2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.40.823.823a/s640x640/72292509_1278992565617687_88713384388543519_n.jpg?_nc_ht=instagram.fbts2-1.fna.fbcdn.net&_nc_cat=111&oh=80d5598341ce6de5b2ed5402266f782b&oe=5E7D4751">
        </div>
        <div class="col-4">
            <img class="w-100 pt-4" src="https://instagram.fbts2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.0.749.749a/s640x640/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fbts2-1.fna.fbcdn.net&_nc_cat=103&oh=29ba98314e82d1e358a7137594d41ff4&oe=5EAF09D7">
        </div>
        <div class="col-4">
            <img class="w-100 pt-4" src="https://instagram.fbts2-1.fna.fbcdn.net/v/t51.2885-15/e35/c127.0.496.496a/71842560_179815429869179_5569562397308320476_n.jpg?_nc_ht=instagram.fbts2-1.fna.fbcdn.net&_nc_cat=111&oh=19fdbeab6c402704eb71268b3f8bc138&oe=5E6CEDCC">
        </div>
    </div>
</div>
@endsection
