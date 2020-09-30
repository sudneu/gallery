@extends('todos.layout')

@section('content')
<div style="border-bottom : 2px solid; padding : 10px;">
    <h1> All Your Todos</h1>
    <a href="/todos/create"><button style="border-style:none; background-color: #0b0b0b; color:white;">Create New</button></a>
</div>
<ul>
@foreach($todos as $todo)
    <li style="display:flex; justify-content: space-between;">
        <p>{{$todo->title}}</p>
        <a href="{{'/todos/'.$todo->id.'/edit'}}" style="margin: auto 0;">
            <button style="border-style:none; background-color:maroon; color:white;">Edit</button>
        </a>
    </li>
@endforeach
</ul>
@endsection