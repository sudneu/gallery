@extends('insta_example.layout')

@section('content')
    <div style="display:flex; flex-direction: row; justify-content:center;; padding:2em;">
        <div style="height:300px;" >
            <img style="height:100%;" src="/storage/uploads/{{$post->image}}" />
        </div>
        <div style="padding:0 .5em;">
            <div>
                <h3 style="margin:0;">{{$post->user->username}}</h3>
                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>
@endsection