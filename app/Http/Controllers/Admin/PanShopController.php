<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PanShop;
use Illuminate\Http\Request;

class PanShopController extends Controller
{
    public function index()
    {
        $datas = PanShop::latest()->get();
        return view('admin.panshop.index', compact('datas'));
    }
}
