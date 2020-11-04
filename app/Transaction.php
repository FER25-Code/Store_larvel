<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $table ="transactions";
    protected $fillable= ['product_id','storage_id','typeTransaction','Qty','Created','Createdby'];
    public $timestamps=false;
}
