<?php

namespace App\Http\Controllers;

use App\WalletTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WalletTransactionController extends Controller
{
    public function Create_WalletTransaction(){
        return view('WalletTransaction.InsertWalletTransaction');
    }

    public function Insert_WalletTransaction(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'wallet_id'=>'required|max:250',
            'user_id'=>'required|max:250',
            'amount'=>'required|max:250',
            'type'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            WalletTransaction::create([
                'wallet_id'=>$request->wallet_id,
                'user_id'=>$request->user_id,
                'amount'=>$request->amount,
                'type'=>$request->type,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_WalletTransaction(){
        $wallettransactions=WalletTransaction::select ('id','wallet_id','user_id','amount','type','updated','updatedby')->get();
        return view('WalletTransaction.AllWalletTransaction',compact('wallettransactions'));
    }

    public function Edit_WalletTransaction($id){
        $wallettransaction=WalletTransaction::find($id);
        if (!$wallettransaction)
            return redirect()->back();
        $wallettransaction=WalletTransaction::select ('id','wallet_id','user_id','amount','type','updated','updatedby')->find($id);
        return view('WalletTransaction.EditWalletTransaction',compact('wallettransaction'));
    }

    public function Update_WalletTransaction(Request $request ,$id){
        $wallettransaction=WalletTransaction::find($id);
        if (!$wallettransaction)
            return redirect()->back();
        $wallettransaction->update($request->all());
        return  'saved successfully';
    }

    public function delete_WalletTransaction($id){
        DB::table('wallettransactions')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }

}
