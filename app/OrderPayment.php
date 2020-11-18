<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    protected $table ="orderpayments";
    protected $fillable=['wallettransaction_id','order_id','amount','updated','updatedby'];
    public $timestamps=false;
}
