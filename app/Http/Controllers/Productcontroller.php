<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Productcontroller extends Controller
{
    public function Create_Product(){
        return view('Product.product');
    }




    public function Insert_Product(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:50 ',
            'Description' => 'required|max:250'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            //insert
            Product::create([
                'name' => $request->name,
                'Description' => $request->Description,
            ]);
            return 'saved successfully';
        }
    }
    public function All_Product(){
        $products=  Product::select ('id','name','Description')->get();
        return view('Product.AllProducts',compact('products'));
    }

    public function Edit_Product($id){

        $product=Product::find($id);
        if (!$product)
            return redirect()->back();
        $product=Product::select('id','name','Description')->find($id);
        return view('Product.EditProduct',compact('product'));

    }

    public function Update_Product(Request $request ,$id){
        $product=Product::find($id);
        if (!$product)
            return redirect()->back();

        $product->update($request->all());
        return redirect()-> back()->with('success');

    }









    public function deleteProduct($id){
            DB::table('products')->where('id',$id)->delete();
            echo "Record deleted successfully.";
        }

}
