<?php 

Auth::routes();

Route::get('/profile', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::post('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('p/{post}', 'PostsController@show');


