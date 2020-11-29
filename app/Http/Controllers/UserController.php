<?php

namespace App\Http\Controllers;

use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function All_User()
    {
        $users = User::select('id', 'name', 'email','updated_at','created_at')->get();
        return view('User.AllUsers', compact('users'));
    }

    public function delete_User($id){
        DB::table('users')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Insert_User()
    {
        return view('User.InsertUsers');
    }

    public function Find_UserBalance(Request $request){
     $data= $request->user();
        echo 'id:';  echo  $user_id=$data->id ;
        $wallet=Wallet::select('id','user_id','balance','due','updated','updatedby')->where('user_id',$user_id)->get();
        $someObject = json_decode($wallet);
        echo $wallets=$someObject[0]->balance;
        return view('home',compact('wallets'));
    }

    public function Find_WalletBalance($product_id){


        $balance=ProductPrice::where('product_id',$product_id)->get();
        return view('ProductPrice.FindProductPrice',compact('productprices'));
    }


}
