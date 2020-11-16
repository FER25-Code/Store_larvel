<?php

namespace App\Http\Controllers;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class WalletController extends Controller
{
    public function Create_Wallet(){
        return view('Wallet.InsertWallet');
    }

    public function Insert_Wallet(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'user_id'=>'required|max:250',
            'balance'=>'required|max:250',
            'due'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            Wallet::create([
                'user_id'=>$request->user_id,
                'balance'=>$request->balance,
                'due'=>$request->due,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_Wallet(){
        $wallets=Wallet::select ('id','user_id','balance','due','updated','updatedby')->get();
        return view('Wallet.AllWallet',compact('wallets'));
    }

    public function Edit_Wallet($id){
        $wallet=Wallet::find($id);
        if (!$wallet)
            return redirect()->back();
        $wallet=Wallet::select ('id','user_id','balance','due','updated','updatedby')->find($id);
        return view('Wallet.EditWallet',compact('wallet'));
    }

    public function Update_Wallet(Request $request ,$id){
        $wallet=Wallet::find($id);
        if (!$wallet)
            return redirect()->back();
        $wallet->update($request->all());
        return  'saved successfully';
    }

    public function delete_Wallet($id){
        DB::table('wallets')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
