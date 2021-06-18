<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function sendRegister(Request $request){
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

        $myUser -> save();

        return Auth::attempt($request->only('email', password_hash($request->password, PASSWORD_DEFAULT)));

        

    }
}
