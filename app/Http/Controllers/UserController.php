<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{
    public function userRegister()
    {
        return view('user.register');
    }

    public function userRegisterPost(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'designation' => ['required'],
            'aadhar' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        $randomNumber = rand(00001, 99999);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->code = 'panmasala' . $randomNumber;
        $user->designation = $request->designation;
        $user->aadhar = $request->aadhar;
        $user->password = Hash::make($request->password);
        $user->password_hint = $request->password;
        $user->status = 'Pending';
        $user->save();

        $notification = array(
            'message' => 'User Registered Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('login')->with($notification);
    }

    public function userLogin()
    {
        return view('user.login');
    }

    // public function userLoginPost(Request $request)
    // {
    //     // dd($request->all());
    //     $credentials = $request->only('code', 'password');
    //     $credentials['password'] = $request->password;
    //     // dd($credentials);
    //     if (Auth::guard('web')->attempt($credentials)) {
    //         // dd('hi');
    //         $notification1 = array(
    //             'message' => 'User Login Successfully',
    //             'alert-type' => 'success'
    //         );
    //         return redirect()->route('user-dashboard')->with($notification1);
    //     } else {
    //         $notification2 = array(
    //             'message' => 'Invalid Credentials',
    //             'alert-type' => 'error'
    //         );
    //         return back()->with($notification2);
    //     }
    // }



    public function userLoginPost(Request $request)
    {
        $credentials = $request->only('code', 'password');

        // Retrieve the user by code (assuming 'code' is a unique identifier)
        $user = \App\Models\User::where('code', $credentials['code'])->first();

        if (!$user) {
            return back()->with([
                'message' => 'User not found',
                'alert-type' => 'error'
            ]);
        }

        if ($user->status == 'Pending') {
            return back()->with([
                'message' => 'Your Account is Not Approved Yet',
                'alert-type' => 'error'
            ]);
        } elseif ($user->status == 'Rejected') {
            return back()->with([
                'message' => 'Your Account is Rejected',
                'alert-type' => 'error'
            ]);
        }

        // Attempt login only if status is "Approved"
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('user-dashboard')->with([
                'message' => 'User Login Successfully',
                'alert-type' => 'success'
            ]);
        } else {
            return back()->with([
                'message' => 'Invalid Credentials',
                'alert-type' => 'error'
            ]);
        }
    }



    public function userDashboard()
    {
        $user = Auth::guard('web')->user();
        return view('user.dashboard', compact('user'));
    }



    public function userLogout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'User Logout Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('login')->with($notification);
    }

    public function userChangePassword()
    {
        return view('user.change_password');
    }


    public function userChangePasswordPost(Request $request)
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
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
            'password_hint' => $request->new_password
        ]);
        return back()->with("status", " Password Changed Successfully");
    }


    public function userProfile(){
        $user = Auth::guard('web')->user();
            // dd($user);
        return view('user.profile', compact('user'));
    }


    public function userProfileUpdate(Request $request)
    {
        // $admin = Admin::first();
        $admin = Auth::guard('web')->user();

        $admin->code = $request->code;
        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->designation = $request->designation;
        $admin->aadhar = $request->aadhar;

        if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path('storage/user/' . $admin->image));
            $filename = 'user' . time() . '.' . $image->getClientOriginalExtension();

            // installing image intervention
            // composer require intervention/image

            // config/app.php
            // Intervention\Image\ImageServiceProvider::class,
            // 'Image' => Intervention\Image\Facades\Image::class,

            // php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"


            Image::make($image)->resize(256, 256)->save('storage/user/' . $filename);
            $filePath = 'storage/user/' . $filename;
            $admin->image = $filename;

        }
        $admin->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
