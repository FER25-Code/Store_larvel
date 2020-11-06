<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productinstance extends Model
{
    protected $table ="productinstances";
    protected $fillable= ['product_id','name','code','pin','Created','Createdby'];
    public $timestamps=false;

}
