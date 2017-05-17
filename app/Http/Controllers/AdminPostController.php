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
        $userinfo = DB::table('users')->where('id', $userid)->first();
        if ($userinfo->roles == 1) {
            $posts = DB::table('posts')
                ->leftjoin('users', 'posts.author_id', '=', 'users.id')
                ->leftjoin('categories', 'posts.category_id', '=', 'categories.id')
                ->select('posts.*', 'users.name', 'categories.name as name_cat', 'categories.id as id_cat','users.name as username')
                ->paginate(10);
        }else{
        $posts = DB::table('posts')
                ->leftjoin('users', 'posts.author_id', '=', 'users.id')
                ->leftjoin('categories', 'posts.category_id', '=', 'categories.id')
                ->select('posts.*', 'users.name', 'categories.name as name_cat', 'categories.id as id_cat','users.name as username')
                ->where('posts.author_id', $userid)
                ->paginate(10);
        }
        $categories = DB::table('categories')->get();

        return view('post_govern', [
            'posts' => $posts,
            'cats' => $categories,
            'userid' => $userid,
            'userinfo' => $userinfo
        ]);
    }

    /**
     * Добавить новый пост 
     */
    public function add(Request $request) {
        if ($request->file('img') !== NULL) {
            $img = $request->file('img');
            #$img->resize(300, 200);
            $img->move(public_path('images/posts/'), $img->getClientOriginalName());
            $data = $request->except(['img']);
            $data['img'] = 'images/posts/' . $img->getClientOriginalName();
        } else {
            $data = $request->except(['img']);
            $data['img'] = 'images/posts/no_image.png';
        }
        $validator = Validator::make($request->all(), [
                    'title' => 'required|max:255|unique:posts',
                    'content' => 'required|min:50',
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
return redirect('/admin/post')->with('postSuccess', 'Пост успешно создан!');
        
    }

    /**
     * Удалить пост 
     */
    public function del(Post $post) {
        $post->delete();
        return redirect('/admin/post');
    }

    public function update(Post $post, Request $request) {
        $userid = Auth::id();
        $validator = Validator::make($request->all(), [
                    'newtitle' => 'required|max:255',
                    'newcontent' => 'required|min:50',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/post#poup-post-' . $_POST['id'])
                            ->withInput()
                            ->withErrors($validator);
        }
        $uploaddir = 'images/posts/';
        $post->id = filter_input(INPUT_POST, 'id');
        $post->title = filter_input(INPUT_POST, 'newtitle');
        $post->content = filter_input(INPUT_POST, 'newcontent');
        $post->category_id = filter_input(INPUT_POST, 'category_id');
        if ($_FILES['img']['name']) {
            $post->img = $uploaddir . basename($_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $post->img);
        } else {
            $post->img = filter_input(INPUT_POST, 'oldimg');
        }
        $checkAuthor = DB::table('posts')
                ->select('author_id')
                ->where('id', $post->id)
                ->first();
        $checkStatus = DB::table('users')
                ->select('roles')
                ->where('id', $userid)
                ->first();
        if ($checkAuthor->author_id == $userid || $checkStatus->roles == 1) {
        DB::table('posts')
                ->where('id', $post->id)
                ->update(array('title' => $post->title, 'content' => $post->content, 'category_id' => $post->category_id, 'img' => $post->img));
        }
        return redirect('/admin/post')->with('postUpdateSuccess', 'Пост успешно отредактирован!');
    }

}
