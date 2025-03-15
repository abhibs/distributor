<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projector;
use Illuminate\Http\Request;

class ProjectorController extends Controller
{
    public function index()
    {
        $datas = Projector::latest()->get();
        return view('admin.projector.index', compact('datas'));
    }
}
