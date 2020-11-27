<?php

namespace App\Http\Controllers;

use App\ProductPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductPriceController extends Controller
{

    public function Create_ProductPrice(){
        return view('ProductPrice.InsertProductPrice');
    }

    public function Insert_ProductPrice(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'pricelistversion_id'=>'required|max:250',
            'product_id'=>'required|max:250',
            'unitprice'=>'required|max:250',
            'qtytodiscount'=>'required|max:250',
            'discount'=>'required|max:250',
            'discountprice'=>'required|max:250'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            ProductPrice::create([
                'pricelistversion_id'=>$request->pricelistversion_id,
                'product_id'=>$request->product_id,
                'unitprice'=>$request->unitprice,
                'qtytodiscount'=>$request->qtytodiscount,
                'discount'=>$request->discount,
                'discountprice'=>$request->discountprice,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_ProductPrice(){
        $productprices=ProductPrice::select ('id','pricelistversion_id','product_id','unitprice','qtytodiscount','discount','discountprice','updated','updatedby')->get();
        return view('ProductPrice.AllProductPrice',compact('productprices'));
    }

    public function Edit_ProductPrice($id){
        $productprice=ProductPrice::find($id);
        if (!$productprice)
            return redirect()->back();
        $productprice=ProductPrice::select('id','pricelistversion_id','product_id','unitprice','qtytodiscount','discount','discountprice','updated','updatedby')->find($id);
        return view('ProductPrice.EditProductPrice',compact('productprice'));




    }


/*    public function Find_ProductPrice($product_id){
        //$productpricesFind=ProductPrice::find($product_id);
        $productpricesFind=ProductPrice::whereColumn('product_id',$product_id);
        if (!$productpricesFind)
            return redirect()->back();
      $productpricesFind=ProductPrice::select('id','pricelistversion_id','product_id','unitprice','qtytodiscount','discount','discountprice','updated','updatedby');
       // DB::select('select * from productprices where product_id = :product_id', ['product_id' => $product_id]);

        return view('ProductPrice.FindProductPrice',compact('productpricesFind'));

    }*/
    public function Find_ProductPrice($product_id){
        $productprices=ProductPrice::where('product_id',$product_id)->get();
      //   echo $productpricesFind;

        return view('ProductPrice.FindProductPrice',compact('productprices'));

    }

    public function Update_ProductPrice(Request $request ,$id){
        $productprice=ProductPrice::find($id);
        if (!$productprice)
            return redirect()->back();
        $productprice->update($request->all());
        return  'saved successfully';
    }

    public function delete_ProductPrice($id){
        DB::table('productprices')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
