<?php

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
    return view('home');
});

/// sales erp goes here for the  routes  
Route::resource('customer', 'CustomerController');
Route::resource('product', 'ProductController');
Route::resource('invoice', 'InvoiceController');
Route::resource('supplier','SupplierController');
Route::resource('order','OrderController');
//not yet 
//Route::get('/findPrice', 'InvoiceController@findPrice')->name('findPrice');
