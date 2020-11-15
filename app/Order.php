<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ="orders";
    protected $fillable=['user_id','amout','created','updated','updatedby'];
    public $timestamps=false;
}
