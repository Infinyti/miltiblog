<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
        $categories = DB::table('categories')->select('id','name')->get();
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        if (property_exists($this, 'linkRequestView')) {
            return view($this->linkRequestView, [
                'categories' => $categories,
                'newposts' => $newposts,
            ]);
        }

        if (view()->exists('auth.passwords.email')) {
            return view('auth.passwords.email', [
                'categories' => $categories,
                'newposts' => $newposts,
            ]);
        }

        return view('auth.password', [
            'categories' => $categories,
            'newposts' => $newposts,
        ]);
    }

    public function showResetForm(Request $request, $token = null)
    {
        $categories = DB::table('categories')->select('id','name')->get();
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        if (is_null($token)) {
            return $this->getEmail();
        }

        $email = $request->input('email');

        if (property_exists($this, 'resetView')) {
            return view($this->resetView, [
                'categories' => $categories,
                'newposts' => $newposts,
            ])->with(compact('token', 'email'));
        }

        if (view()->exists('auth.passwords.reset')) {
            return view('auth.passwords.reset', [
                'categories' => $categories,
                'newposts' => $newposts,
            ])->with(compact('token', 'email'));
        }

        return view('auth.reset', [
            'categories' => $categories,
            'newposts' => $newposts,
        ])->with(compact('token', 'email'));
    }
}
