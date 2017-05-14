<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
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
        $userid = Auth::id();
        $posts = DB::table('posts')
                ->leftjoin('users', 'posts.author_id', '=', 'users.id')
                ->select('posts.*', 'users.name')
                ->where('posts.author_id', $userid)
                ->get();
        $categories = DB::table('categories')->where('author_id', $userid)->get();
        return view('post_govern', [
            'posts' => $posts,
            'cats' => $categories,
            'userid' => $userid
        ]);
    }

    /**
     * Добавить новый пост
     */
    public function add(Request $request) {
        if ($request->file('img') !== NULL) {
            $request->file('img')->move(public_path('images/posts/'), $request->file('img')->getClientOriginalName());
            $data = $request->except(['img']);
            $data['img'] = 'images/posts/' . $request->file('img')->getClientOriginalName();
        } else {
            $data = $request->except(['img']);
            $data['img'] = 'images/posts/no_image.png';
        }
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
        $post->author_id = $request->author_id;
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
    
    public function update(Post $post) {

        $post->id = filter_input(INPUT_POST, 'id');
        $post->title = filter_input(INPUT_POST, 'title');
        $post->content = filter_input(INPUT_POST, 'content');
        $post->category_id = filter_input(INPUT_POST, 'category_id');
        
        DB::table('posts')
                ->where('id', $post->id)
                ->update( array('title'=> $post->title,'content' => $post->content,'category_id' => $post->category_id,));
    return redirect('/admin/post');
    }

}
