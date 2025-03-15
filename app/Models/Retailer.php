<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id', 'id');
    }


    public function superstockist()
    {
        return $this->belongsTo(SuperStockist::class, 'super_stockist_id', 'id');
    }


    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function distributor()
    {
        return $this->belongsTo(Distributor::class, 'distributor_id', 'id');
    }
}
