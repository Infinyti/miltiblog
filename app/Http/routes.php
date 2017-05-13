<?php
use App\Post;
use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');

Route::get('/post/{id}', 'PostController@index');

Route::get('/categories/{id}', 'CategoriesController@index');

Route::get('/authors', function () {
    return view('authors');
});

Route::get('/admin/post', 'AdminPostController@index');

/**
 * Добавить новый пост
 */
Route::post('/admin/post', 'AdminPostController@add')->name('addpost');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
