<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Requests\TodoCreateRequest;
use Validator;

class TodoController extends Controller
{
    public function index(){

        $todos = Todo::all();
        return view('todos.index')->with(['todos' => $todos]);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request){
        
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Create successfully');
        
        // $rules = [
        //     'title' => 'required | max:255',
        // ];

        // $messages = [
        //     'title.max' => 'The todo title must not be greater than 255 characters',
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if($validator->fails()){
        //     return redirect()->back()
        //                         ->withErrors($validator)
        //                         ->withInput();
        // }
        // $request -> validate([
        //     'title' => 'required | max:50',
        // ]);
    }

    public function edit(Todo $todo)
    {
        // dd($todo->title);
        // $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update(['title'=> $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated');
    }

    public function complete(Todo $todo)
    {
        $todo -> update(['completed' => true]);
        return redirect()->back()->with('message', 'Task Marked as Completed!');
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(['completed' => false]);
        return redirect()->back()->with('message', 'Task Marked as Incomplete!');
    }
}
