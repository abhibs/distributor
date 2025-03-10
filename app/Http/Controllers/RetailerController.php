<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\District;
use App\Models\Retailer;
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
    public function store(Request $request)
    {
        $request->validate([
            'district_id' => 'required',
            'super_stockist_id' => 'required',
            'distributor_id' => 'required',
            'shop_name' => 'required',
            'owner_name' => 'required',
            'mobile_no' => 'required|max:10',
            'shop_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pin_code' => 'required|max:6',
            'image' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            
        ], [
            'district_id.required' => 'Please Select District Name',
            'super_stockist_id.required' => 'Please Select Super Stockist Name ',
            'distributor_id.required' => 'Please Select Distributor Name',
            'shop_name.required' => 'Shop Name Required',
            'owner_name.required' => 'Owner Name Required',
            'mobile_no.required' => 'Mobile Number Required',
            'mobile_no.max' => 'Please Enter atleast 10 digit number',
            'shop_address.required' => 'Shop Address Required',
            'city.required' => 'City Name Required',
            'state.required' => 'State Name Required',
            'pin_code.required' => 'Pincode Required',
            'pin_code.max' => 'Please Enter atleast 6 digit Pincode',
            'image.required' => 'Your Image Required',
            'latitude.required' => 'Latitude Required',
            'longitude.required' => 'Longitude Required',
        ]);


        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/retailer'), $name_gen);
        // Get the path to the saved image
        $save_url = 'storage/retailer/' . $name_gen;


        $retailer = new Retailer();
        $retailer->district_id = $request->district_id;
        $retailer->super_stockist_id = $request->super_stockist_id;
        $retailer->distributor_id = $request->distributor_id;
        $retailer->shop_name = $request->shop_name;
        $retailer->owner_name = $request->owner_name;
        $retailer->mobile_no = $request->mobile_no;
        $retailer->alternate_mobile_no = $request->alternate_mobile_no;
        $retailer->shop_address = $request->shop_address;
        $retailer->city = $request->city;
        $retailer->state = $request->state;
        $retailer->pin_code = $request->pin_code;
        $retailer->image = $save_url;
        $retailer->latitude = $request->latitude;
        $retailer->longitude = $request->longitude;
        $retailer->save();

        $notification = array(
            'message' => 'Retailer Added Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('login')->with($notification);
    }
}
