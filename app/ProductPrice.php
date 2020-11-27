<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static select(string $string, string $string1, string $string2, string $string3, string $string4, string $string5, string $string6, string $string7, string $string8)
 * @method static find($id)
 * @method static create(array $array)
 */
class ProductPrice extends Model
{
    protected $table ="productprices";
    protected $fillable=['pricelistversion_id' ,'product_id','unitprice','qtytodiscount','discount','discountprice','updated','updatedby'];
    public $timestamps=false;
}
