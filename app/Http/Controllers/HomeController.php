<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
/**
 * Description of HomeController
 *
 * @author Админ
 */
class HomeController extends Controller{

   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::select('select DISTINCT(categories.id), name from categories left join posts on categories.id = posts.category_id where categories.id = posts.category_id');
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        $posts = DB::table('posts')
                ->leftjoin('users', 'posts.author_id','=','users.id')
                ->select('posts.*', 'users.name','users.id as userid')
                ->orderBy('updated_at', 'desc')
                ->paginate(10);        
        return view('home', [
            'title' => 'Главная',
            'categories' => $categories,
            'posts' => $posts,
            'newposts' => $newposts,
            ]);
    }

}
