<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $datas = User::latest()->get();
        return view('admin.user.index', compact('datas'));
    }


    public function approveUser()
    {
        $datas = User::where('status', 'Approved')->latest()->get();
        return view('admin.user.approve', compact('datas'));
    }

    public function rejectExpense()
    {
        $datas = User::where('status', 'Rejected')->latest()->get();
        return view('admin.user.reject', compact('datas'));
    }
}
