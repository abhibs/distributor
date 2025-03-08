<?php

namespace App\Http\Controllers;

use App\Models\WallPoster;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class WallPosterController extends Controller
{
    public function create()
    {
        // $ip = request()->ip();
        return view('user.wallposter.create');
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
            'image.required' => 'Wall Poster Image Required',
        ]);


        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/wallposter'), $name_gen);
        // Get the path to the saved image
        $save_url = 'storage/wallposter/' . $name_gen;


        $wallposter = new WallPoster();
        $wallposter->user_id = Auth::id();
        $wallposter->country = $request->country;
        $wallposter->region = $request->region;
        $wallposter->city = $request->city;
        $wallposter->latitude = $request->latitude;
        $wallposter->longitude = $request->longitude;
        $wallposter->image = $save_url;
        $wallposter->save();

        $notification = array(
            'message' => 'New Wall Poster Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('user-wallposter-index')->with($notification);
    }

    public function index()
    {

        $todayDate = Carbon::now()->toDateString();
        $user_id = Auth::id();

        $datas = WallPoster::where('user_id', $user_id)->whereDate('created_at', $todayDate)->latest()->get();

        return view('user.wallposter.index', compact('datas'));
    }
}
