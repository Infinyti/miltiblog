<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    protected $username = 'name';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function loginUsername()
    {
        return property_exists($this, 'username') ? $this->username : 'name';
    }

    protected function getFailedLoginMessage()
    {
        return Lang::get('auth.failedLogin');
    }
    protected function getFailedPasswordMessage()
    {
        return Lang::get('auth.failedPassword');
    }

    protected function sendFailedLoginResponse(Request $request)
    {

        $fieldUser = $this->loginUsername();
        $user = User::select($fieldUser,'password')->where($fieldUser, $request->input($fieldUser))->first();
        if (!$user || $user->name != $request->input($fieldUser)) {
            $error = [$fieldUser=>$this->getFailedLoginMessage()];
        }
        elseif ($user->password != bcrypt($request->input('password'))) {
            $error = ['password'=>$this->getFailedPasswordMessage()];
        }

        return redirect()->back()
            ->withInput($request->only($fieldUser, 'remember'))
            ->withErrors($error);
    }

    protected function validator(array $data)
    {
        $messages = [
            'name.required' => 'Необходимо указать логин.',
            'name.min:6' => 'Логин должен быть не короче 6 символов.',
            'name.unique:users' => 'Пользователь с таким логином уже зарегистрирован.',
            'email.required' => 'Необходимо указать ваш e-mail.',
            'email.email' => 'Некорректный e-mail.',
            'email.unique:users' => 'Пользователь с таким e-mail уже существует зарегистрирован.',
            'password.required' => 'Необходимо указать пароль.',
            'password.min:6' => 'Пароль должен быть не короче 6 символов.',
            'password.confirmed' => 'Пароли не совпадают.',
        ];
        return Validator::make($data, [
            'name' => 'required|max:255|min:6|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $categories = DB::table('categories')->select('id','name')->get();
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        if (property_exists($this, 'registerView')) {
            return view($this->registerView, [
                'categories' => $categories,
                'newposts' => $newposts,
            ]);
        }

        return view('auth.register', [
            'categories' => $categories,
            'newposts' => $newposts,
        ]);
    }

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        $categories = DB::table('categories')->select('id','name')->get();
        $newposts = DB::select('select * from posts ORDER BY created_at DESC LIMIT 3');
        $view = property_exists($this, 'loginView')
            ? $this->loginView : 'auth.authenticate';

        if (view()->exists($view)) {
            return view($view, [
                'categories' => $categories,
                'newposts' => $newposts,
            ]);
        }

        return view('auth.login', [
            'categories' => $categories,
            'newposts' => $newposts,
        ]);
    }
}
