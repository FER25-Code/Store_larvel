<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Storagecontroller extends Controller
{




    public function deleteStorage($id){
        DB::table('storages')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
