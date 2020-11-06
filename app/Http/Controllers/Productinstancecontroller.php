<?php

namespace App\Http\Controllers;

use App\Productinstance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Productinstancecontroller extends Controller
{

    public function Create_Productinstance(){
        return view('Productinstance.InsertProductinstance');
    }

    public function Insert_Productinstance(Request $request){
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'product_id'=>'required|max:250',
            'name'=>'required|max:250',
            'code'=>'required|max:250',
            'pin'=>'required|max:250',
            'Createdby'=>'required|max:250',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            Productinstance::create([
                'product_id'=>$request->product_id,
                'name'=>$request->name,
                'code' => $request->code,
                'pin' => $request->pin,
                'Created' =>$now,
                'Createdby' => $request->Createdby,
            ]);
            return 'saved successfully';
        }
    }

    public function All_Productinstance(){
        $productinstances=  Productinstance::select ('id','product_id','name','code','pin','Created','Createdby')->get();
        return view('Productinstance.AllProductinstances',compact('productinstances'));
    }

    public function Edit_Productinstance($id){
        $productinstance=Productinstance::find($id);
        if (!$productinstance)
            return redirect()->back();
        $productinstance=Productinstance::select ('id','product_id','name','code','pin','Created','Createdby')->find($id);
        return view('Productinstance.EditProductinstance',compact('productinstance'));
    }
    public function Update_Productinstance(Request $request ,$id){
        $productinstance=Productinstance::find($id);
        if (!$productinstance)
            return redirect()->back();
        $productinstance->update($request->all());
        return  'saved successfully';
    }

    public function delete_Productinstance($id){
        DB::table('productinstances')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }


}
