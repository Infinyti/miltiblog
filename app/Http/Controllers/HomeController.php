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
        $categories = DB::table('categories')->select('id','name')->get();
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        dump($newposts);
        $posts = DB::table('posts')
                ->leftjoin('users', 'posts.author_id','=','users.id')
                ->select('posts.*', 'users.name')
                ->get();
        return view('home', [
            'categories' => $categories,
            'posts' => $posts,
            'newposts' => $newposts
            ]);
    }

}
