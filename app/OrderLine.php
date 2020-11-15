<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $table ="orderlines";
    protected $fillable=['Order_id','product_id','Qty','price','created','updated','updatedby'];
    public $timestamps=false;
}
