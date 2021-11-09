<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/


// public function __construct()
// {
// $this->middleware('auth');
// }


public function index()
{
//

//$orders = Order::all();
//$customers = Customer::all();
$orders = order::all();
return view('order.index', compact('orders'));
}


//return view('order.index', compact('orders'));


/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//


// $customers = order::all();
$orders = order::all();
$sales=

$customers = Customer::all();

return view('order.create', compact('orders','customers'));
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{



$order = new order();
$order->customer_id = $request->customer_id;
//$order->name = $request->name;
$order->location = $request->location;
$order->item_tittle = $request->item_tittle;
$order->amount = $request->amount;
$order->delivery_mode = $request->delivery_mode;
$order->date = $request->date;



$order->save();

return redirect()->back()->with('message', 'Order Created Successfully');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
$order = order::findOrFail($id);
$orders = order::where('id', $id)->get();
return view('order.show', compact('orders'));
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
//

$order=order::findOrFail($id);


$sales = Sale::where('id', $id)->get();
$customers = Customer::all();

return view('order.edit', compact('order','customers','sales'));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function export() 

{

return Excel::download(new OrdessExport, 'ordes.xlsx');

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
$order = order::find($id);
$order->delete();
return redirect()->back();
}
}
