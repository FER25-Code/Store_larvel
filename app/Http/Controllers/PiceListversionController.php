<?php

namespace App\Http\Controllers;

use App\PiceListversion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PiceListversionController extends Controller
{

public function Create_PiceListversion(){
    return view('PiceListVersion.InsertPiceListVersion');
}

public function Insert_PiceListversion(Request $request){
    $now = date("Y-m-d H:i:s", time());
    $rules = [
        'pricelist_id'=>'required|max:250',
        'name'=>'required|max:250',
        'version'=>'required|max:250',
    ];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        return $validator->errors();
    } else {
        PiceListversion::create([
            'pricelist_id'=>$request->pricelist_id,
            'name'=>$request->name,
            'version'=>$request->version,
            'updated' =>$now,
            'updatedby' =>$now,
        ]);
        return 'saved successfully';
    }
}

public function All_PiceListversion(){
    $picelistversions=PiceListversion::select ('id','pricelist_id','name','version','updated','updatedby')->get();
    return view('PiceListVersion.AllPiceListVersion',compact('picelistversions'));
}

public function Edit_PiceListversion($id){
    $picelistversion=PiceListversion::find($id);
    if (!$picelistversion)
        return redirect()->back();
    $picelistversion=PiceListversion::select ('id','pricelist_id','name','version','updated','updatedby')->find($id);
    return view('PiceListVersion.EditPiceListVersion',compact('picelistversion'));
}

public function Update_PiceListversion(Request $request ,$id){
    $picelistversion=PiceListversion::find($id);
    if (!$picelistversion)
        return redirect()->back();
    $picelistversion->update($request->all());
    return  'saved successfully';
}

public function delete_PiceListversion($id){
    DB::table('picelistversions')->where('id',$id)->delete();
    echo "Record deleted successfully.";
}
}