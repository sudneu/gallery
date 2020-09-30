<?php

Route::get('/todos', 'TodoController@index')->name('todo.index');

Route::get('/todos/create', 'TodoController@create');

Route::post('/todos/create', 'TodoController@store');

Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

Route::get('/todos/{todo}/edit', 'TodoController@edit');


Route::get('/', function(){
    return view('welcome');
});

Route::get('/contact','ContactController@view');

Route::post('/contact', 'ContactController@post');




























Route::get('/user', 'UserController@index');

Route::post('/upload', function(){
    dd('sdf');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
