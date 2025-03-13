<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function create()
    {
        return view('admin.zone.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Zone Name Required',
        ]);

        $zone = new Zone();
        $zone->name = $request->name;
        $zone->save();

        $notification = array(
            'message' => 'Zone Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin-zone-index')->with($notification);
    }

    public function index()
    {
        return view('admin.zone.index');
    }
}
