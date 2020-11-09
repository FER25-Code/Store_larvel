<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{

    protected $table ="usergroups";
    protected $fillable= ['user_id','name','pourcentage','updated','updatedby'];
    public $timestamps=false;
}
