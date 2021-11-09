<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
//
$products = Product::all();

return view('product.index', compact('products'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
$products =Product::all();

return view('product.create', compact('products'));
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
//
$request->validate([
'name' => 'required|min:3|unique:products|regex:/^[a-zA-Z ]+$/',
'serial_number' => 'required',
'model' => 'required|min:3',
'category_id' => 'required',
'sales_price' => 'required',
'unit_id' => 'required',


]);


$product = new Product();
$product->name = $request->name;
$product->serial_number = $request->serial_number;
$product->model = $request->model;
$product->category_id = $request->category_id;
$product->sales_price = $request->sales_price;
$product->unit_id = $request->unit_id;



$product->save();


return redirect()->back()->with('message', 'Product Created Successfully');
}
//}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{

//
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{

$product =Product::findOrFail($id);


return view('product.edit', compact('products'));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
//

$request->validate([
'name' => 'required|min:3|unique:products|regex:/^[a-zA-Z ]+$/',
'serial_number' => 'required',
'model' => 'required|min:3',
'category_id' => 'required',
'sales_price' => 'required',
'unit_id' => 'required',
// 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


]);


$product = new Product();
$product->name = $request->name;
$product->serial_number = $request->serial_number;
$product->model = $request->model;
$product->category_id = $request->category_id;
$product->sales_price = $request->sales_price;
$product->unit_id = $request->unit_id;


$product->save();
return redirect()->back()->with('message', 'Product Created Successfully');
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
$product = Product::find($id);
$product->delete();
return redirect()->back();
}
}
