<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');

Route::get('/post/{id}', 'PostController@index');

Route::get('/authors', 'AuthorsController@index');

Route::get('/categories/{id}', 'CategoriesController@index');

Route::get('/authors', function () {
    return view('authors');
});

Route::get('/admin/post', 'AdminPostController@index');

/**
 * Добавить новый пост
 */
Route::post('/admin/post', function(Request $request) {
    $request->file('img')->move(public_path('images/posts/'), $request->file('img')->getClientOriginalName());
    $data = $request->except(['img']);
    $data['img'] = 'images/posts/' . $request->file('img')->getClientOriginalName();

    $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'content' => 'required',
                'category_id' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect('/admin/post')
                        ->withInput()
                        ->withErrors($validator);
    }
    $post = new Post;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->img = $data['img'];
    $post->category_id = $request->category_id;
    $post->save();

    return redirect('/admin/post');
});



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
