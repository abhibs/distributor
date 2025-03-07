<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanShopController extends Controller
{
    public function create()
    {
        return view('user.panshop.create');
    }
    public function index()
    {
        return view('user.panshop.index');
    }
}
