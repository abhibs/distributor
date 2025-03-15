<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WallPoster;
use Illuminate\Http\Request;

class WallPosterController extends Controller
{
    public function index()
    {
        $datas = WallPoster::latest()->get();
        return view('admin.wallposter.index', compact('datas'));
    }
}
