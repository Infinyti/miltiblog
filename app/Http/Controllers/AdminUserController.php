<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use App\Categories;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $userid = Auth::id();
        $userinfo = DB::table('users')->where('id', $userid)->first();
        return view('user_govern',[
            'userinfo' => $userinfo
        ]);
    }

}
