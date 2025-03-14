<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $datas = User::where('status', 'Pending')->latest()->get();
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


    public function pendingToApproveUser($id)
    {
        User::findOrFail($id)->update(['status' => 'Approved']);

        $notification = array(
            'message' => 'User Status Approved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin-user-approve')->with($notification);
    }

    public function pendingToRejectUser($id)
    {
        User::findOrFail($id)->update(['status' => 'Rejected']);

        $notification = array(
            'message' => 'User Status Rejected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin-user-reject')->with($notification);
    }
}
