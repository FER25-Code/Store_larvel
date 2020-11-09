<?php

namespace App\Http\Controllers;

use App\PiceList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ControllerPiceList extends Controller
{
    //['user_id','name','year','updated','updatedby']

    public function Create_PiceList(){
        return view('PiceList.InsertPiceList');
    }

    public function Insert_PiceList(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'user_id'=>'required|max:250',
            'name'=>'required|max:250',
            'year'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            PiceList::create([
                'user_id'=>$request->user_id,
                'name'=>$request->name,
                'year'=>$request->year,
                'updated' =>$now,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_PiceList(){
        $picelists=PiceList::select ('id','user_id','name','year','updated','updatedby')->get();
        return view('PiceList.AllPiceList',compact('picelists'));
    }

    public function Edit_PiceList($id){
        $picelist=PiceList::find($id);
        if (!$picelist)
            return redirect()->back();
        $picelist=PiceList::select ('id','user_id','name','year','updated','updatedby')->find($id);
        return view('PiceList.EditPiceList',compact('picelist'));
    }

    public function Update_PiceList(Request $request ,$id){
        $picelist=PiceList::find($id);
        if (!$picelist)
            return redirect()->back();
        $picelist->update($request->all());
        return  'saved successfully';
    }

    public function delete_PiceList($id){
        DB::table('picelists')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }

}
