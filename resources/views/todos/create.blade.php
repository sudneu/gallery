@extends('todos.layout')

@section('content')
    <div style="display:flex; flex-direction: column; text:center; ">
        <h1> What next you need To-Do</h1>
        <x-alert />
        <form method="post" action="/todos/create" style="display:fex; flex-direction:column;">
            @csrf
            <input type="text" name="title" placeholder="Enter your thing.">
            <input type="submit" value="Create" style="border-style:none; height:25px; width:100px; color : white; background-color: lightblue; ">
        </form>

        <a href="/todos"><button style="background-color: green; color:white; border-style:none; padding:5px;">Back</button></a>
@endsection