<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');

Route::get('/post/{id}', 'PostController@index');

Route::get('/authors', 'AuthorsController@index');

Route::get('/categories/{id}', 'CategoriesController@index');

Route::get('/admin/post', 'AdminPostController@index');
Route::post('/admin/post', 'AdminPostController@add');
Route::delete('/admin/post/del/{post}', 'AdminPostController@del');

Route::get('/admin/cat', 'AdminCatController@index');
Route::post('/admin/cat', 'AdminCatController@add');
Route::delete('/admin/cat/del/{cat}', 'AdminCatController@del');
Route::post('/admin/cat/update/{cat}', 'AdminCatController@update');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
