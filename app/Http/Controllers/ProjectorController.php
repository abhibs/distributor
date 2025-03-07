<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectorController extends Controller
{
    public function create()
    {
        return view('user.projector.create');
    }
    public function index()
    {
        return view('user.projector.index');
    }
}
