<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $chek_id = DB::table('posts')->where('id', $id)->first();
        if(empty($chek_id)){
            return redirect('/');
        }
        $post = DB::table('posts')
                ->leftjoin('users', 'posts.author_id','=','users.id')
                ->select('posts.*', 'users.name')
                ->where('posts.id', $id)
                ->first();
        $categories = DB::table('categories')->select('id','name')->get();
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        return view('post', [
            'title' => $post->title,
            'content' => $post->content,
            'author' => $post->name,
            'img' => $post->img,
            'date' => $post->created_at,
            'categories' => $categories,
            'newposts' => $newposts
        ]);

    }

}
