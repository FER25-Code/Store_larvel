<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PiceList extends Model
{
    protected $table ="picelists";
    protected $fillable=['user_id','name','year','updated','updatedby'];
    public $timestamps=false;

}
