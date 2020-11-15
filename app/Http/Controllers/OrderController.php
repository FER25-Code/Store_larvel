<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function Create_Order(){
    return view('Order.InsertOrder');
}

    public function Insert_Order(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'user_id'=>'required|max:250',
            'amout'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            Order::create([
                'user_id'=>$request->user_id,
                'amout'=>$request->amout,
                'created'=>$request->created,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_Order(){
        $orders=Order::select ('id','user_id','amout','created','updated','updatedby')->get();
        return view('Order.AllOrders',compact('orders'));
    }

    public function Edit_Order($id){
        $order=Order::find($id);
        if (!$order)
            return redirect()->back();
        $order=Order::select ('id','user_id','amout','created','updated','updatedby')->find($id);
        return view('Order.EditOrder',compact('order'));
    }

    public function Update_Order(Request $request ,$id){
        $order=Order::find($id);
        if (!$order)
            return redirect()->back();
        $order->update($request->all());
        return  'saved successfully';
    }

    public function delete_Order($id){
        DB::table('orders')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }

}
