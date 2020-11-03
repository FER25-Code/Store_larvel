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

Route::get('deleteproduct/{id}','Productcontroller@deleteProduct');

Route::group(['prefix' => 'pro'],function (){
    Route::get('/createproduct','Productcontroller@Create_Product');
    Route::post('/addproduct','Productcontroller@Insert_Product')->name('pro.insertProduct');
    Route::get('/allproducts','Productcontroller@All_Product');
    Route::get('/editproducts/{product_id}','Productcontroller@Edit_Product');
    Route::post('/updateproduct/{product_id}','Productcontroller@Update_Product')->name('pro.updateProduct');

});

//STORAGE

Route::Post('deletestorage/{id}','Storagecontroller@deleteStorage');

//TRANSACTION

Route::Post('deletetransaction/{id}','Transactioncontroller@deleteTransaction');

