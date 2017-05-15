<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use Validator;
use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
    
    public function update(User $user) {
        $pass = filter_input(INPUT_POST, 'password');
        $pass = Hash::make($pass);
        $user->id = filter_input(INPUT_POST, 'id');
        $user->name = filter_input(INPUT_POST, 'name');
        $user->email = filter_input(INPUT_POST, 'email');
        $user->password = $pass;
        
        DB::table('users')
                ->where('id', $user->id)
                ->update( array('name'=> $user->name,'email' => $user->email,'password' => $user->password));
    return redirect('/admin/user');
    }
    
}
