<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    protected $table ="wallettransactions";
    protected $fillable= ['wallet_id','user_id','amount','type','updated','updatedby'];
    public $timestamps=false;
}
