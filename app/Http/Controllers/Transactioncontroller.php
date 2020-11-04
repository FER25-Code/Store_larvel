<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Transactioncontroller extends Controller
{

    public function Create_Transaction(){
        return view('Transaction.InsertTransaction');
    }

    public function Insert_Transaction(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'product_id'=>'required|max:250',
            'storage_id'=>'required|max:250',
            'typeTransaction'=>'required|max:25',
            'Qty'=>'required|max:250',
            'Createdby'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            Transaction::create([
                'product_id'=>$request->product_id,
                'storage_id'=>$request->storage_id,
                'typeTransaction' => $request->typeTransaction,
                'Qty' => $request->Qty,
                'Created' =>$now,
                'Createdby' => $request->Createdby,
            ]);
            return 'saved successfully';
        }
    }

    public function All_Storage(){
        $transactions=  Transaction::select ('id','product_id','storage_id','typeTransaction','Qty','Created','Createdby')->get();
        return view('Transaction.AllTransactions',compact('transactions'));
    }

    public function Edit_Transaction($id){
        $transaction=Transaction::find($id);
        if (!$transaction)
            return redirect()->back();
        $transaction=Transaction::select ('id','product_id','storage_id','typeTransaction','Qty','Created','Createdby')->find($id);
        return view('Transaction.EditTransaction',compact('transaction'));
    }

    public function Update_Transaction(Request $request ,$id){
        $transaction=Transaction::find($id);
        if (!$transaction)
            return redirect()->back();
        $transaction->update($request->all());
        return  'saved successfully';
    }

    public function delete_Transaction($id){
        DB::table('transactions')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
