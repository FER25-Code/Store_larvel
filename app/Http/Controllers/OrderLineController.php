<?php

namespace App\Http\Controllers;

use App\OrderLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderLineController extends Controller
{
    public function Create_OrderLine(){
        return view('OrderLine.InsertOrderLine');
    }

    public function Insert_OrderLine(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'Order_id'=>'required|max:250',
            'product_id'=>'required|max:250',
            'Qty'=>'required|max:250',
            'price'=>'required|max:250'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            OrderLine::create([
                'Order_id'=>$request->Order_id,
                'product_id'=>$request->product_id,
                'Qty'=>$request->Qty,
                'price'=>$request->price,
                'created'=>$request->created,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_OrderLine(){
        $orderlines=OrderLine::select ('id','Order_id','product_id','Qty','price','created','updated','updatedby')->get();
        return view('OrderLine.AllOrderLines',compact('orderlines'));
    }

    public function Edit_OrderLine($id){
        $order=OrderLine::find($id);
        if (!$order)
            return redirect()->back();
        $orderline=OrderLine::select ('id','Order_id','product_id','Qty','price','created','updated','updatedby')->find($id);
        return view('OrderLine.EditOrderLine',compact('orderline'));
    }

    public function Update_OrderLine(Request $request ,$id){
        $order=OrderLine::find($id);
        if (!$order)
            return redirect()->back();
        $order->update($request->all());
        return  'saved successfully';
    }

    public function delete_OrderLine($id){
        DB::table('orderlines')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
