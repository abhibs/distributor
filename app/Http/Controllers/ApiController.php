<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\District;
use App\Models\SuperStockist;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getSuperStockist($zone_id)
    {
        $superstocklist = SuperStockist::where('zone_id', $zone_id)->orderBy('name', 'ASC')->get();
        return json_encode($superstocklist);
    }

    public function getDistrictlist($super_stockist_id, $zone_id)
    {
        $districtlist = District::where('super_stockist_id', $super_stockist_id)->where('zone_id', $zone_id)->orderBy('name', 'ASC')->get();
        return json_encode($districtlist);
    }

    public function getDistributorlist($district_id, $super_stockist_id, $zone_id)
    {
        $distributorlist = Distributor::where('district_id', $district_id)->where('super_stockist_id', $super_stockist_id)->where('zone_id', $zone_id)->orderBy('name', 'ASC')->get();
        return json_encode($distributorlist);
    }
}
