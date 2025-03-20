<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Retailer;
use App\Models\WallPoster;
use App\Models\PanShop;
use App\Models\Projector;
use App\Models\User;
use App\Models\Zone;
use App\Models\SuperStockist;
use App\Models\District;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password');
        $credentials['password'] = $request->password;
        // dd($credentials);
        if (Auth::guard('admin')->attempt($credentials)) {
            // dd('hi');
            $notification1 = array(
                'message' => 'Admin Login Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('admin-dashboard')->with($notification1);
        } else {
            $notification2 = array(
                'message' => 'Invalid Credentials',
                'alert-type' => 'error'
            );
            return back()->with($notification2);
        }
    }

    public function dashboard()
    {
        $todayDate = Carbon::now()->toDateString();
        $todayRetailers = Retailer::whereDate('created_at', $todayDate)->count();
        $todayWallPoster = WallPoster::whereDate('created_at', $todayDate)->count();
        $todayPanShop = PanShop::whereDate('created_at', $todayDate)->count();
        $todayProjector = Projector::whereDate('created_at', $todayDate)->count();
        $Retailers = Retailer::count();
        $WallPoster = WallPoster::count();
        $PanShop = PanShop::count();
        $Projector = Projector::count();
        $RegisteredUser = User::where('status', 'Pending')->count();
        $ApprovedUser = User::where('status', 'Approved')->count();
        $RejectedUser = User::where('status', 'Rejected')->count();
        $Zones = Zone::count();
        $SuperStockists = SuperStockist::count();
        $Districts = District::count();
        $Distributors = Distributor::count();
    
        return view('admin.index', compact('todayRetailers', 'todayWallPoster', 'todayPanShop', 'todayProjector','Retailers', 'WallPoster', 'PanShop', 'Projector', 'RegisteredUser', 'RegisteredUser', 'ApprovedUser', 'RejectedUser', 'Zones', 'SuperStockists', 'Districts', 'Distributors'));
    }

    public function adminLogout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'Admin Logout Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin-login')->with($notification);
    }


    public function adminChangePassword()
    {
        // dd(auth::user());
        return view('admin.change_password');
    }


    public function adminChangePasswordPost(Request $request)
    {
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password
        Admin::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
            'password_hint' => $request->new_password
        ]);
        return back()->with("status", " Password Changed Successfully");
    }


    public function adminProfile(){
        $user = Auth::guard('admin')->user();
        // dd($user);
        return view('admin.profile', compact('user'));
    }



    public function adminProfileUpdate(Request $request)
    {
        // $admin = Admin::first();
        $admin = Auth::guard('admin')->user();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;

        if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path('storage/admin/' . $admin->image));
            $filename = 'admin' . time() . '.' . $image->getClientOriginalExtension();

            // installing image intervention
            // composer require intervention/image

            // config/app.php
            // Intervention\Image\ImageServiceProvider::class,
            // 'Image' => Intervention\Image\Facades\Image::class,

            // php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"


            Image::make($image)->resize(256, 256)->save('storage/admin/' . $filename);
            $filePath = 'storage/admin/' . $filename;
            $admin->image = $filename;
        }
        $admin->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
