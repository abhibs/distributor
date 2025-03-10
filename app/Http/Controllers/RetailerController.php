<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\District;
use App\Models\SuperStockist;

use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function create()
    {
        $districts = District::latest()->get();
        $superstockists = SuperStockist::latest()->get();
        $distributors = Distributor::latest()->get();
        return view('user.retailer.create', compact('districts', 'distributors','superstockists'));
    }
}
