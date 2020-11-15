<?php

namespace App\Http\Controllers;

use App\OrderLineProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderLineProductController extends Controller
{
    public function Create_OrderLineProduct(){
        return view('OrderLineProduct.InsertOrderLineProduct');
    }

    public function Insert_OrderLineProduct(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'orderline_id'=>'required|max:250',
            'product_id'=>'required|max:250',
            'productinstrance_id'=>'required|max:250',
            'code'=>'required|max:250'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            OrderLineProduct::create([
                'orderline_id'=>$request->orderline_id,
                'product_id'=>$request->product_id,
                'productinstrance_id'=>$request->productinstrance_id,
                'code'=>$request->code,
                'created'=>$request->created,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_OrderLineProduct(){
        $orderlineproducts=OrderLineProduct::select ('id','orderline_id','product_id','productinstrance_id','code','created','updated','updatedby')->get();
        return view('OrderLineProduct.AllOrderLineProducts',compact('orderlineproducts'));
    }

    public function Edit_OrderLineProduct($id){
        $orderlinesproduct=OrderLineProduct::find($id);
        if (!$orderlinesproduct)
            return redirect()->back();
        $orderlinesproduct=OrderLineProduct::select ('id','orderline_id','product_id','productinstrance_id','code','created','updated','updatedby')->find($id);
        return view('OrderLineProduct.EditOrderLineProduct',compact('orderlinesproduct'));
    }

    public function Update_OrderLineProduct(Request $request ,$id){
        $orderlinesproduct=OrderLineProduct::find($id);
        if (!$orderlinesproduct)
            return redirect()->back();
        $orderlinesproduct->update($request->all());
        return  'saved successfully';
    }

    public function delete_OrderLineProduct($id){
        DB::table('orderlineproducts')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
