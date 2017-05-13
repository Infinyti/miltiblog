<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Validator;
use App\Post;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $posts = DB::table('posts')
                ->leftjoin('users', 'posts.author_id', '=', 'users.id')
                ->select('posts.*', 'users.name')
                // ->where('posts.id', $id)
                ->get();
        $categories = DB::table('categories')->get();
        return view('post_govern', [
            'posts' => $posts,
            'cats' => $categories,
        ]);
    }

    /**
     * Добавить новый пост
     */
    public function add(Request $request) {
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
    }

    /**
     * Удалить пост
     */
    public function del(Post $post) {
        $post->delete();
        return redirect('/admin/post');
    }

}
