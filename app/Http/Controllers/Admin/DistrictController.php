<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\SuperStockist;
use App\Models\Zone;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function create()
    {
        $zones = Zone::latest()->get();
        return view('admin.district.create', compact('zones'));
    }

    public function getSuperStockist($zone_id)
    {
        $superstocklist = SuperStockist::where('zone_id', $zone_id)->orderBy('name', 'ASC')->get();
        return json_encode($superstocklist);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'zone_id' => 'required',
            'super_stockist_id' => 'required',
            'name' => 'required',
        ], [
            'zone_id.required' => 'Please Select Zone Name',
            'super_stockist_id.required' => 'Please Select Super Stockist Name ',
            'name.required' => 'District Name Required',
        ]);


        $district = new District();
        $district->zone_id = $request->zone_id;
        $district->super_stockist_id = $request->super_stockist_id;
        $district->name = $request->name;
        $district->save();

        $notification = array(
            'message' => 'District Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('admin-district-index')->with($notification);
    }

    public function index()
    {
        $datas = District::latest()->get();
        return view('admin.district.index', compact('datas'));
    }
}
