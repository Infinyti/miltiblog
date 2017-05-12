<?php

<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 2897ababb9d299e86589f64c65a5633a442e15bf
Route::get('/', function ($id = NULL) {
=======
Route::get('/', function () {
>>>>>>> 706e9399d5b5d4303e29e5c54ef54f6a2632b3b5
    return view('home');
});

Route::get('/post', function ($id = NULL) {
    return view('post');
});

Route::get('/categories', function ($id = NULL) {
    return view('categories');
});

Route::get('/authors', function () {
    return view('authors');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
