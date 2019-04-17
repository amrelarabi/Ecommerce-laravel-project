<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    public function auth(){
        return view('user/auth');
    }
    public function login(){
        return view('user/login');
    }
    public function register(){
        return view('user/register');
    }
    public function error(){
        return view('user/error');
    }

}
