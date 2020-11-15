<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLineProduct extends Model
{
    protected $table ="orderlineproducts";
    protected $fillable=['orderline_id','product_id','productinstrance_id','code','created','updated','updatedby'];
    public $timestamps=false;
}
