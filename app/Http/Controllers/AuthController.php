<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getRegister(Request $request)
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        // 
    }

    public function getLogin(Request $request)
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        // 
    }

    public function getLogout(Request $request)
    {
        return view('login');
    }
}
