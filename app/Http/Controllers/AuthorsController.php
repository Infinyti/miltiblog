<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class AuthorsController extends Controller{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->select('id','name')->get();
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        return view('authors', [
            'title' => 'О команде',
            'categories' => $categories,
            'newposts' => $newposts
            ]);
    }

}
