<?php

/*
Route::get('/create', function () {
    return view('albums.create');
});
*/

Route::get('/', 'AlbumsController@index');
Route::get('/albums', 'AlbumsController@index');
Route::get('/create', 'AlbumsController@create');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::post('/store', 'AlbumsController@store');

Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
