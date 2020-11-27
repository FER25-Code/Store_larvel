<?php

namespace App\Http\Controllers;

use App\User;
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

}
