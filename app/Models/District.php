<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
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
}
