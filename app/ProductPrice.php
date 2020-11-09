<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table ="productprices";
    protected $fillable=['pricelistversion_id' ,'product_id','unitprice','qtytodiscount','discount','discountprice','updated','updatedby'];
    public $timestamps=false;
}
