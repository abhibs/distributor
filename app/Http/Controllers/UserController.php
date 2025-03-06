<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegister()
    {
        return view('user.register');
    }
    public function userLogin()
    {
        return view('user.login');
    }
    public function userDashboard()
    {
        return view('user.dashboard');
    }

    public function createWallPoster()
    {
        return view('user.wallposter.create');
    }
}
