<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuperStockist;
use App\Models\Zone;
use Illuminate\Http\Request;

class SuperStockistController extends Controller
{
    public function create()
    {
        $zones = Zone::latest()->get();
        return view('admin.superstockist.create', compact('zones'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'zone_id' => 'required',
            'name' => 'required',
        ], [
            'zone_id.required' => 'Please Select Zone Name',
            'name.required' => 'Super Stockist Name Required',
        ]);


        $superstockist = new SuperStockist();
        $superstockist->zone_id = $request->zone_id;
        $superstockist->name = $request->name;
        $superstockist->save();

        $notification = array(
            'message' => 'Super Stockist Added Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('admin-super-stockist-index')->with($notification);
    }

    public function index()
    {
        return view('admin.superstockist.index');
    }
}
