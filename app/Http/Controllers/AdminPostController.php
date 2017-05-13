<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Validator;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $posts = DB::table('posts')
                ->leftjoin('users', 'posts.author_id','=','users.id')
                ->select('posts.*', 'users.name')
               // ->where('posts.id', $id)
                ->get();
        $categories = DB::table('categories')->get();
        return view('post_govern', [
            'posts' => $posts,
            'cats' => $categories,
        ]);

    }
        
}
