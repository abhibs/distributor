<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function index()
    {
        return view('admin.district.index');
    }
}
