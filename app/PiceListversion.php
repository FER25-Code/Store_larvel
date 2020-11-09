<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PiceListversion extends Model
{
    protected $table ="picelistversions";
    protected $fillable=['pricelist_id','name','version','updated','updatedby'];
    public $timestamps=false;

}
