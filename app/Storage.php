<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $table ="storages";
    protected $fillable=['product_id','Createdby','QtyOnHand','updated','updatedby'];
    public $timestamps=false;

}
