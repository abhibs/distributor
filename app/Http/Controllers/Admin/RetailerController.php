<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Retailer;
use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function index()
    {
        $datas = Retailer::latest()->get();
        return view('admin.retailer.index', compact('datas'));
    }
}
