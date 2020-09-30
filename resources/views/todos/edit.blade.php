@extends('todos.layout')

@section('content')
    <h1 > Update this todo list </h1>
    <x-alert />
    <form method="post" action="{{route('todo.update',['todo' => $todo->id])}}">
        @csrf
        @method('patch')
        <input type="text" value="{{$todo->title}}" name="title" />
        <input type="submit" value="Update" />
    </form>

    <a href="/todos" > Back </a>
@endsection
