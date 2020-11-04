<?php

namespace App\Http\Controllers;

use App\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class Storagecontroller extends Controller
{

    public function Create_Storage(){
        return view('Storage.InsertStorage');
    }

    public function Insert_Storage(Request $request)
    {
        $now = date("Y-m-d H:i:s", time());
        $rules = [
            'QtyOnHand' => 'required|max:250 ',
            'Createdby' => 'required|max:250',
            'product_id'=>'required|max:250'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            Storage::create([
                'product_id'=>$request->product_id,
                'QtyOnHand' => $request->QtyOnHand,
                'Createdby' => $request->Createdby,
                'updated' =>$now ,
                'updatedby' =>$now,
            ]);
            return 'saved successfully';
        }
    }

    public function All_Storage(){
        $storages=  Storage::select ('id','product_id','Createdby','QtyOnHand','updated','updatedby')->get();
        return view('Storage.AllStorages',compact('storages'));
    }

    public function Edit_Storage($id){

        $storage=Storage::find($id);
        if (!$storage)
            return redirect()->back();
        $storage=Storage::select ('id','product_id','Createdby','QtyOnHand','updated','updatedby')->find($id);
        return view('Storage.EditStorage',compact('storage'));
    }

    public function Update_Storage(Request $request ,$id){
        $storage=Storage::find($id);
        if (!$storage)
            return redirect()->back();
        $storage->update($request->all());
        return  'saved successfully';

    }

    public function delete_Storage($id){
        DB::table('storages')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }
}
