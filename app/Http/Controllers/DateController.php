<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $posts = DB::table('posts')
                ->where('updated_at', $date)
                ->leftjoin('users', 'posts.author_id','=','users.id')
                ->select('posts.*', 'users.name')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        $userinfo=DB::table('users')               
                ->where('users.id', $id)
                ->first();       
        return view('user', [
            'posts' => $posts,
            'categories'=>$categories,
            'newposts' => $newposts,
            'userinfo'=>$userinfo,
            ]);
    }
}
