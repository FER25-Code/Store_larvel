<?php

namespace App\Http\Controllers;

use App\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserGroupController extends Controller
{

    public function Create_UserGroup(){
        return view('UserGroup.InsertUsergroup');
    }

    public function Insert_UserGroup(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'user_id'=>'required|max:250',
            'name'=>'required|max:250',
            'pourcentage'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            UserGroup::create([
                'user_id'=>$request->user_id,
                'name'=>$request->name,
                'pourcentage'=>$request->pourcentage,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_UserGroup(){
        $usergroups=  UserGroup::select ('id','user_id','name','pourcentage','updated','updatedby')->get();
        return view('UserGroup.AllUsergroups',compact('usergroups'));
    }

    public function Edit_UserGroup($id){
        $usergroup=UserGroup::find($id);
        if (!$usergroup)
            return redirect()->back();
        $usergroup=UserGroup::select ('id','user_id','name','pourcentage','updated','updatedby')->find($id);
        return view('UserGroup.EditUsergroup',compact('usergroup'));
    }

    public function Update_UserGroup(Request $request ,$id){
        $Usergroup=UserGroup::find($id);
        if (!$Usergroup)
            return redirect()->back();
        $Usergroup->update($request->all());
        return  'saved successfully';
    }

    public function delete_UserGroup($id){
        DB::table('usergroups')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }


}
