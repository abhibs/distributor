<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

}
