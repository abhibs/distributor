<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\District;
use App\Models\Zone;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function create()
    {
        $zones = Zone::latest()->get();
        return view('admin.distributor.create', compact('zones'));
    }


    public function getDistrictlist($super_stockist_id)
    {
        $districtlist = District::where('super_stockist_id', $super_stockist_id)->orderBy('name', 'ASC')->get();
        return json_encode($districtlist);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'zone_id' => 'required',
            'super_stockist_id' => 'required',
            'district_id' => 'required',
            'name' => 'required',
        ], [
            'zone_id.required' => 'Please Select Zone Name',
            'super_stockist_id.required' => 'Please Select Super Stockist Name ',
            'district_id.required' => 'Please Select District Name ',
            'name.required' => 'Distributor Name Required',
        ]);


        $distributor = new Distributor();
        $distributor->zone_id = $request->zone_id;
        $distributor->super_stockist_id = $request->super_stockist_id;
        $distributor->district_id = $request->district_id;
        $distributor->name = $request->name;
        $distributor->save();

        $notification = array(
            'message' => 'Distributor Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('admin-distributor-index')->with($notification);
    }

    public function index()
    {
        $datas = Distributor::latest()->get();
        return view('admin.distributor.index', compact('datas'));
    }
}
