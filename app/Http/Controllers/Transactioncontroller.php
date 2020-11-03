<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Transactioncontroller extends Controller
{
    public function deleteTransaction($id){
        DB::table('transactions')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
