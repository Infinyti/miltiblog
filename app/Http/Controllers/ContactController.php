<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Validator;
use App\Categories;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = DB::select('select DISTINCT(categories.id), name from categories left join posts on categories.id = posts.category_id where categories.id = posts.category_id');
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        return view('contact', [
            'title' => 'Контакты',
            'categories'=>$categories,
            'newposts' => $newposts,
        ]);
    }

}
