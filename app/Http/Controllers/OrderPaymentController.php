<?php

namespace App\Http\Controllers;

use App\OrderPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderPaymentController extends Controller
{
    //'id','wallettransaction_id','order_id','amount','updated','updatedby'
    public function Create_OrderPayment(){

        return view('OrderPayment.InsertOrderPayment');
    }

    public function Insert_OrderPayment(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'wallettransaction_id'=>'required|max:250',
            'order_id'=>'required|max:250',
            'amount'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            OrderPayment::create([
                'wallettransaction_id'=>$request->wallettransaction_id,
                'order_id'=>$request->order_id,
                'amount'=>$request->amount,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_OrderPayment(){
        $orderpayments=OrderPayment::select ('id','wallettransaction_id','order_id','amount','updated','updatedby')->get();
        return view('OrderPayment.AllOrdersPayment',compact('orderpayments'));
    }

    public function Edit_OrderPayment($id){
        $orderpayment=OrderPayment::find($id);
        if (!$orderpayment)
            return redirect()->back();
        $orderpayment=OrderPayment::select ('id','wallettransaction_id','order_id','amount','updated','updatedby')->find($id);
        return view('OrderPayment.EditOrderPayment',compact('orderpayment'));
    }

    public function Update_OrderPayment(Request $request ,$id){
        $orderpayment=OrderPayment::find($id);
        if (!$orderpayment)
            return redirect()->back();
        $orderpayment->update($request->all());
        return  'saved successfully';
    }

    public function delete_OrderPayment($id){
        DB::table('orderpayments')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
