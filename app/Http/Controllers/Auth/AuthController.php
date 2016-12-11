<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;


class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected $redirectPath = '/';

    protected $loginPath ='/admin/auth/login';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function getLogin(){
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->email;
        $user = \Auth::user();
        return $this->login($request);
    }

    public function logout(Request $request)
    {
        \Auth::logout();
        return redirect('/');
    }
}
