<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use Illuminate\Http\Request;

class SuperStockistController extends Controller
{
    public function create()
    {
        $zones = Zone::latest()->get();
        return view('admin.superstockist.create', compact('zones'));
    }
}
