<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    function login() {
        return view('welcome');
    }

    function signout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
