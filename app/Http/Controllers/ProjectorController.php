<?php

namespace App\Http\Controllers;

use App\Models\Projector;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ProjectorController extends Controller
{
    public function create()
    {
        return view('user.projector.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'region' => 'required',
            'city' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'video' => 'required',
        ], [
            'country.required' => 'Country Name Required',
            'region.required' => 'Reginal Name Required',
            'city.required' => 'City Name Required',
            'latitude.required' => 'Latitude Required',
            'longitude.required' => 'Longitude Required',
            'video.required' => 'Projector Video Required',
        ]);


        $video = $request->file('video');
        $name_gen = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
        $video->move(public_path('storage/projector'), $name_gen);
        // Get the path to the saved image
        $save_url = 'storage/projector/' . $name_gen;


        $projector = new Projector();
        $projector->user_id = Auth::id();
        $projector->country = $request->country;
        $projector->region = $request->region;
        $projector->city = $request->city;
        $projector->latitude = $request->latitude;
        $projector->longitude = $request->longitude;
        $projector->video = $save_url;
        $projector->save();

        $notification = array(
            'message' => 'New Projector Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('user-projector-index')->with($notification);
    }


    public function index()
    {
        $todayDate = Carbon::now()->toDateString();
        $user_id = Auth::id();

        $datas = Projector::where('user_id', $user_id)->whereDate('created_at', $todayDate)->latest()->get();

        return view('user.projector.index', compact('datas'));
    }
}
