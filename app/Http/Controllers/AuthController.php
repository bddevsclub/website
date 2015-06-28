<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Http\Request;


class AuthController extends Controller
{

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect(route('home'));
        } else {
            $request->flash();
            return view('auth/login');
        }


    }

    public function logout()
    {
        \Auth::logout();
        return redirect(route('home'));
    }


}
