<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallPosterController extends Controller
{
    public function create()
    {
        return view('user.wallposter.create');
    }
    public function index()
    {
        return view('user.wallposter.index');
    }
}
