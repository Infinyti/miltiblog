<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use App\Post;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
	
	#Route::get('/admin', 'AdminController@index');
	
	
        return redirect()->action('App\Http\Controllers\AdminPostController@index');
    }

}
