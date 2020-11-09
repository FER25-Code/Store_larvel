<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//PRODUCT
Route::group(['prefix' => 'product'],function (){
    Route::get('/createproduct','Productcontroller@Create_Product');
    Route::post('/insertproduct','Productcontroller@Insert_Product')->name('product.insertProduct');
    Route::get('/allproducts','Productcontroller@All_Product');
    Route::get('/editproduct/{product_id}','Productcontroller@Edit_Product');
    Route::post('/updateproduct/{product_id}','Productcontroller@Update_Product')->name('pro.updateProduct');
    Route::get('/deleteproduct/{id}','Productcontroller@delete_Product');
});

//STORAGE
Route::group(['prefix' => 'storage'],function (){
    Route::get('/createstorage','Storagecontroller@Create_Storage');
    Route::post('/insertstorage','Storagecontroller@Insert_Storage')->name('storage.insertstorage');
    Route::get('/allstorage','Storagecontroller@All_Storage');
    Route::get('/editstorage/{storage_id}','Storagecontroller@Edit_Storage');
    Route::post('/updatestorage/{storage_id}','Storagecontroller@Update_Storage')->name('storage.updatestorage');
    Route::get('/deletestorage/{id}','Storagecontroller@delete_Storage');

});


//TRANSACTION
Route::group(['prefix' => 'transaction'],function (){
    Route::get('/createtransaction','Transactioncontroller@Create_Transaction');
    Route::post('/inserttransaction','Transactioncontroller@Insert_Transaction')->name('transaction.inserttransaction');
    Route::get('/allstorage','Transactioncontroller@All_Storage');
    Route::get('/edittransaction/{transaction_id}','Transactioncontroller@Edit_Transaction');
    Route::post('/updatetransaction/{transaction_id}','Transactioncontroller@Update_Transaction')->name('transaction.updatetransaction');
    Route::get('deletetransaction/{id}','Transactioncontroller@delete_Transaction');

});

//Productinstance
Route::group(['prefix' => 'productinstance'],function (){
    Route::get('/createproductinstance','Productinstancecontroller@Create_Productinstance');
    Route::post('/inserttransaction','Productinstancecontroller@Insert_Productinstance')->name('productinstance.insertproductinstance');
    Route::get('/allproductinstance','Productinstancecontroller@All_Productinstance');
    Route::get('/editproductinstance/{productinstance_id}','Productinstancecontroller@Edit_Productinstance');
    Route::post('/updateproductinstance/{productinstance_id}','Productinstancecontroller@Update_Productinstance')->name('productinstance.updateproductinstance');
    Route::get('deleteproductinstance/{productinstance_id}','Productinstancecontroller@delete_Productinstance');
});

//UserGroup
Route::group(['prefix' => 'usergroup'],function (){
    Route::get('/createusergroup','UserGroupController@Create_UserGroup');
    Route::post('/insertusergroup','UserGroupController@Insert_UserGroup')->name('usergroup.insertproductinstance');
    Route::get('/allusergroups','UserGroupController@All_UserGroup');
    Route::get('/editusergroup/{usergroup_id}','UserGroupController@Edit_UserGroup');
    Route::post('/updateusergroup/{usergroup_id}','UserGroupController@Update_UserGroup')->name('usergroup.updateusergroup');
    Route::get('deleteusergroup/{usergroup_id}','UserGroupController@delete_UserGroup');

});

//PiceList
Route::group(['prefix' =>'picelist'],function (){
    Route::get('/createpicelist','ControllerPiceList@Create_PiceList');
    Route::post('/insertpicelist','ControllerPiceList@Insert_PiceList')->name('picelist.insertpicelist');
    Route::get('/allpicelist','ControllerPiceList@All_PiceList');
    Route::get('/editpicelist/{picelist_id}','ControllerPiceList@Edit_PiceList');
    Route::post('/updatepicelist/{picelist_id}','ControllerPiceList@Update_PiceList')->name('picelist.updatepicelist');
    Route::get('deletepicelist/{picelist_id}','ControllerPiceList@delete_PiceList');

});

//PiceListVersion
Route::group(['prefix' =>'picelistversion'],function (){
    Route::get('/createpicelistversion','PiceListversionController@Create_PiceListversion');
    Route::post('/insertpicelistversion','PiceListversionController@Insert_PiceListversion')->name('picelistversion.insertpicelistversion');
    Route::get('/allpicelistversion','PiceListversionController@All_PiceListversion');
    Route::get('/editpicelistversion/{picelistversion_id}','PiceListversionController@Edit_PiceListversion');
    Route::post('/updatepicelistversion/{picelistversion_id}','PiceListversionController@Update_PiceListversion')->name('picelistversion.updatepicelistversion');
    Route::get('deletepicelistversion/{picelistversion_id}','PiceListversionController@delete_PiceListversion');

});

//Productprice
Route::group(['prefix' =>'productprice'],function (){
    Route::get('/createproductprice','ProductPriceController@Create_ProductPrice');
    Route::post('/insertproductprice','ProductPriceController@Insert_ProductPrice')->name('productprice.insertproductprice');
    Route::get('/allproductprice','ProductPriceController@All_ProductPrice');
    Route::get('/editproductprice/{picelistversion_id}','ProductPriceController@Edit_ProductPrice');
    Route::post('/updateproductprice/{picelistversion_id}','ProductPriceController@Update_ProductPrice')->name('productprice.updateproductprice');
    Route::get('deleteproductprice/{picelistversion_id}','ProductPriceController@delete_ProductPrice');

});



//User
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
