<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $chek_id = DB::table('posts')->where('category_id', $id)->first();
        if(empty($chek_id)){
            return redirect('/');
        }
        $categories = DB::select('select DISTINCT(categories.id), name from categories left join posts on categories.id = posts.category_id where categories.id = posts.category_id');
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        $posts = DB::table('posts')
                ->where('category_id', $id)
                ->leftjoin('users', 'posts.author_id','=','users.id')
                ->select('posts.*', 'users.name','users.id as userid')
                ->orderBy('created_at', 'desc');              
        $categoryName=DB::table('categories')               
        return view('categories', [
            'posts' => $posts,
            'categories'=>$categories,
            'newposts' => $newposts,
            'categoryName'=>$categoryName,
			'title'=>$categoryName->name,
            ]);
    }
}
