<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table ="wallets";
    protected $fillable= ['user_id','balance','due','updated','updatedby'];
    public $timestamps=false;
}
