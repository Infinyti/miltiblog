<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($date)
    {
//        if($id == 0 ){
//            $id = NULL;
//        }
        $categories = DB::select('select DISTINCT(categories.id), name from categories left join posts on categories.id = posts.category_id where categories.id = posts.category_id');
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        $posts = DB::select('SELECT posts.id, posts.img, posts.title, posts.updated_at, users.id as \'userid\', users.name FROM posts INNER JOIN users ON posts.author_id=users.id WHERE DATE(posts.updated_at)='.$date.' ORDER BY posts.updated_at DESC');

        return view('date', [
            'posts' => $posts,
            'categories'=>$categories,
            'newposts' => $newposts,
            ]);
    }
}
