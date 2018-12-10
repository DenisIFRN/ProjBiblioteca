<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginForm()
    {
    	return view('paginas.login.login');
    }

    public function login(Request $request)
    {
    	$credentials = $request->only('email','password');

    	if (Auth::attempt($credentials)) {
    		return redirect()->to(route('/home'));
    	} else {
    		return view('erro');
    	}
    }

    public function logout(Request $request)
    {
    	Auth::logout();
    	$request->session()->flush();
    	return redirect()->to(route('/'));
    }
}
