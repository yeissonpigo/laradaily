<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request, array(
            'email' => 'required|max:255',
            'password' => 'required',
        ));

        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)) {
            return redirect('/');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function register()
    {
        return view('register');
    }

    public function sendRegister(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:32',
            'email' => 'required|max:255',
            'password' => 'required',
        ));

        $myUser = new User;
        $myUser->name = $request->name;
        $myUser->email = $request->email;
        $myUser->password = password_hash($request->password, PASSWORD_DEFAULT);
        $myUser->state = false;
        $myUser->admin = false;

        $myUser->save();

        return Auth::attempt($request->only('email', password_hash($request->password, PASSWORD_DEFAULT)));
    }
}
