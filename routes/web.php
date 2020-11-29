<?php

use Illuminate\Support\Facades\Auth;
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
    Route::get('/createproduct','Productcontroller@Create_Product')->name('product.createproduct');
    Route::post('/insertproduct','Productcontroller@Insert_Product')->name('product.insertProduct');
    Route::get('/allproducts','Productcontroller@All_Product')->name('product.allproducts');
    Route::get('/editproduct/{id}','Productcontroller@Edit_Product')->name('product.editproduct');
    Route::post('/updateproduct/{id}','Productcontroller@Update_Product')->name('product.updateProduct');
    Route::get('/deleteproduct/{id}','Productcontroller@delete_Product')->name('product.deleteproduct');
});

//Productprice
Route::group(['prefix' =>'productprice'],function (){
    Route::get('/createproductprice','ProductPriceController@Create_ProductPrice');
    Route::post('/insertproductprice','ProductPriceController@Insert_ProductPrice')->name('productprice.insertproductprice');
    Route::get('/allproductprice','ProductPriceController@All_ProductPrice')->name('productprice.allproductprice');
    Route::get('/editproductprice/{id}','ProductPriceController@Edit_ProductPrice');
    Route::get('/findproductprice/{id}','ProductPriceController@Find_ProductPrice')->name('productprice.findproductprice');
    Route::post('/updateproductprice/{id}','ProductPriceController@Update_ProductPrice')->name('productprice.updateproductprice');
    Route::get('deleteproductprice/{id}','ProductPriceController@delete_ProductPrice');
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

//PiceList
Route::group(['prefix' =>'picelist'],function (){
    Route::get('/createpicelist','ControllerPiceList@Create_PiceList');
    Route::post('/insertpicelist','ControllerPiceList@Insert_PiceList')->name('picelist.insertpicelist');
    Route::get('/allpicelist','ControllerPiceList@All_PiceList')->name('picelist.allpicelist');
    Route::get('/editpicelist/{id}','ControllerPiceList@Edit_PiceList');
    Route::post('/updatepicelist/{picelist_id}','ControllerPiceList@Update_PiceList')->name('picelist.updatepicelist');
    Route::get('deletepicelist/{id}','ControllerPiceList@delete_PiceList')->name('picelist.deletepicelist');

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


//Order
Route::group(['prefix' =>'order'],function (){
    Route::get('/createorder','OrderController@Create_Order')->name('order.createorder');
    Route::post('/insertorder','OrderController@Insert_Order')->name('order.insertorder');
    Route::get('/allorder','OrderController@All_Order')->name('order.allorder');
    Route::get('/editorder/{id}','OrderController@Edit_Order')->name('order.editorder');
    Route::post('/updateorder/{id}','OrderController@Update_Order')->name('order.updateorder');
    Route::get('deleteorder/{id}','OrderController@delete_Order')->name('order.deleteorder');
});

//OrderLine
Route::group(['prefix' =>'orderline'],function (){
    Route::get('/createorderline','OrderLineController@Create_OrderLine');
    Route::post('/insertorderline','OrderLineController@Insert_OrderLine')->name('orderline.insertorderline');
    Route::get('/allorderline','OrderLineController@All_OrderLine');
    Route::get('/editorderline/{orderline_id}','OrderLineController@Edit_OrderLine');
    Route::post('/updateorderline/{orderline_id}','OrderLineController@Update_OrderLine')->name('orderline.updateorderline');
    Route::get('deleteorderline/{orderline_id}','OrderLineController@delete_OrderLine');
});

//OrderLineProduct
Route::group(['prefix' =>'orderlineproduct'],function (){
    Route::get('/createorderlineproduct','OrderLineProductController@Create_OrderLineProduct');
    Route::post('/insertorderlineproduct','OrderLineProductController@Insert_OrderLineProduct')->name('orderlineproduct.insertorderlineproduct');
    Route::get('/allorderlineproduct','OrderLineProductController@All_OrderLineProduct');
    Route::get('/editorderlineproduct/{orderlineproduct_id}','OrderLineProductController@Edit_OrderLineProduct');
    Route::post('/updateorderlineproduct/{orderlineproduct_id}','OrderLineProductController@Update_OrderLineProduct')->name('orderlineproduct.updateorderlineproduct');
    Route::get('deleteorderlineproduct/{orderlineproduct_id}','OrderLineProductController@delete_OrderLineProduct');
});

//OrderPayment
Route::group(['prefix' =>'orderpayment'],function (){
    Route::get('/createorderpayment','OrderPaymentController@Create_OrderPayment');
    Route::post('/insertorderpayment','OrderPaymentController@Insert_OrderPayment')->name('orderpayment.insertorderpayment');
    Route::get('/allorderpayment','OrderPaymentController@All_OrderPayment');
    Route::get('/editorderpayment/{orderpayment_id}','OrderPaymentController@Edit_OrderPayment');
    Route::post('/updateorderpayment/{orderpayment_id}','OrderPaymentController@Update_OrderPayment')->name('orderpayment.updateorderpayment');
    Route::get('deleteorderpayment/{orderpayment_id}','OrderPaymentController@delete_OrderPayment');
});


//Wallet
Route::group(['prefix' =>'wallet'],function (){
    Route::get('/createwallet','WalletController@Create_Wallet')->name('wallet.createwallet');
    Route::post('/insertwallet','WalletController@Insert_Wallet')->name('wallet.insertwallet');
    Route::get('/allwallet','WalletController@All_Wallet')->name('wallet.allwallet');
    Route::get('/editwallet/{id}','WalletController@Edit_Wallet')->name('wallet.editwallet');
    Route::post('/updatewallet/{id}','WalletController@Update_Wallet')->name('wallet.updatewallet');
    Route::get('deletewallet/{id}','WalletController@delete_Wallet')->name('wallet.deletewallet');
});

//WalletTransaction
Route::group(['prefix' =>'wallettransaction'],function (){
    Route::get('/createwallettransaction','WalletTransactionController@Create_WalletTransaction');
    Route::post('/insertwallettransaction','WalletTransactionController@Insert_WalletTransaction')->name('wallettransaction.insertwallettransaction');
    Route::get('/allwallettransaction','WalletTransactionController@All_WalletTransaction');
    Route::get('/editwallettransaction/{wallettransaction_id}','WalletTransactionController@Edit_WalletTransaction');
    Route::post('/updatewallettransaction/{wallettransaction_id}','WalletTransactionController@Update_WalletTransaction')->name('wallettransaction.updatewallettransaction');
    Route::get('deletewallettransaction/{wallettransaction_id}','WalletTransactionController@delete_WalletTransaction');
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

//User
Auth::routes();
Route::group(['prefix' =>'user'],function (){
    Route::get('/alluser','UserController@All_User')->name('user.alluser');
    Route::get('/finduserbalance','UserController@Find_UserBalance')->name('user.finduserbalance');
    Route::get('deleteuser/{user_id}','UserController@delete_User')->name('user.deleteuser');


});

//session
Route::group(['prefix' =>'session'],function (){

    Route::get('get','SessionController@accessSessionData');
  //  Route::get('set','SessionController@storeSessionData');
  //  Route::get('delete','SessionController@deleteSessionData');

});

//UserGroup
Route::group(['prefix' => 'usergroup'],function (){
    Route::get('/createusergroup','UserGroupController@Create_UserGroup');
    Route::post('/insertusergroup','UserGroupController@Insert_UserGroup')->name('usergroup.insertproductinstance');
    Route::get('/allusergroups','UserGroupController@All_UserGroup')->name('usergroup.allusergroups');
    Route::get('/editusergroup/{usergroup_id}','UserGroupController@Edit_UserGroup');
    Route::post('/updateusergroup/{usergroup_id}','UserGroupController@Update_UserGroup')->name('usergroup.updateusergroup');
    Route::get('deleteusergroup/{usergroup_id}','UserGroupController@delete_UserGroup');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/insertusers', [App\Http\Controllers\UserController::class, 'Insert_User'])->name('insertusers');
