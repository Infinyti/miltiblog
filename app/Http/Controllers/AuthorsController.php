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

        return view('authors', [
            'categories' => $categories
            ]);
    }

}
