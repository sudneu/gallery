@extends('insta_example.layout')

@section('content')
    <div style="background-color:#cecece;">
        <div style="max-width:1000px; margin: 0 auto;">
            <div style="padding:1.5em; display : grid; grid-template-columns: 10% 90%; grid-column-gap: 50px;">
                <div class="profile-container" style="margin: auto 0; display:flex; flex-direction:column;align-items:center;">   
                    <div style="height:100px; width:100px;">
                        <img style="height:auto; width:100%; border-radius:50px;" src="/storage/{{$user->profile->image ?? ' '}}">
                    </div>
                </div>
                <div class="review-conatainer">
                    <div style="display:flex; flex-direction:column; justify-content:space-between";>
                        <div style="display:flex; flex-direction : row; justify-content:space-between; align-items:baseline;width: 50%;">
                            <h1 style="margin:0;">{{$user->username}}</h1>
                            <a href="/p/create" style="text-decoration:none; color:green;">Add New Post</a>
                        </div>
                            <div>
                                <a href="/profile/{{$user->id}}/edit ">Edit Profile</a>
                            </div>
                        
                        
                        <div style="display:flex; flex-direction: row; justify-content:space-between; width: 50%;">
                            <p><strong>{{$user->posts->count()}}</strong> posts</p>
                            <p><strong>25k</strong> followers</p>
                            <p><strong>200</strong> following</p>
                        </div>
                    </div>
                    <div><strong>{{$user->profile->title ?? ""}}</strong></div>                    
                    <div>                        
                        <p>{{$user->profile->description ?? "" }}</p>
                    </div>
                    <div><a href="#"> {{$user->profile->url ?? 'N/A'}}</a></div>
                </div>
            </div>
        </div>
    </div>

    @include('insta_example.pages.gallery')

@endsection

