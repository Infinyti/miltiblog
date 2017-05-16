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
        $users = DB::table('users')
                ->leftjoin('users_status', 'users.roles', '=', 'users_status.id')     
                ->select('users.*', 'users_status.name as status')
                ->get();
        return view('user_govern', [
            'userinfo' => $userinfo,
            'users' => $users
        ]);
    }

    public function update(User $user) {
        if (filter_input(INPUT_POST, 'newpassword') !== NULL) {
            $pass = filter_input(INPUT_POST, 'newpassword');
            $pass = Hash::make($pass);
        } else {
            $pass = filter_input(INPUT_POST, 'password');
        }
        $user->id = filter_input(INPUT_POST, 'id');
        $user->name = filter_input(INPUT_POST, 'name');
        $user->email = filter_input(INPUT_POST, 'email');
        $user->password = $pass;

        DB::table('users')
                ->where('id', $user->id)
                ->update(array('name' => $user->name, 'email' => $user->email, 'password' => $user->password));
        return redirect('/admin/user');
    }
    
    public function del(User $user) {
        $user->delete();
        return redirect('/admin/user');
    }

}
