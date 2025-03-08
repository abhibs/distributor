<?php

namespace App\Http\Controllers;

use App\Models\PanShop;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class PanShopController extends Controller
{
    public function create()
    {
        return view('user.panshop.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'region' => 'required',
            'city' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'image' => 'required',
        ], [
            'country.required' => 'Country Name Required',
            'region.required' => 'Reginal Name Required',
            'city.required' => 'City Name Required',
            'latitude.required' => 'Latitude Required',
            'longitude.required' => 'Longitude Required',
            'image.required' => 'Pan Shop Image Required',
        ]);


        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/panshop'), $name_gen);
        // Get the path to the saved image
        $save_url = 'storage/panshop/' . $name_gen;


        $panshop = new PanShop();
        $panshop->user_id = Auth::id();
        $panshop->country = $request->country;
        $panshop->region = $request->region;
        $panshop->city = $request->city;
        $panshop->latitude = $request->latitude;
        $panshop->longitude = $request->longitude;
        $panshop->image = $save_url;
        $panshop->save();

        $notification = array(
            'message' => 'New Pan Shop Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('user-panshop-index')->with($notification);
    }

    public function index()
    {
        $todayDate = Carbon::now()->toDateString();
        $user_id = Auth::id();

        $datas = PanShop::where('user_id', $user_id)->whereDate('created_at', $todayDate)->latest()->get();

        return view('user.panshop.index', compact('datas'));
    }
}
