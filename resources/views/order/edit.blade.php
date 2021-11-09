@extends('layouts.master')

@section('title', 'Order | ')
@section('content')
@include('partials.header')
@include('partials.sidebar')
<main class="app-content">
<div class="app-title">
<div>
<h1><i class="fa fa-edit"></i> Form Samples</h1>
<p>Sample forms</p>
</div>
<ul class="app-breadcrumb breadcrumb">
<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
<li class="breadcrumb-item">Forms</li>
<li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
</ul>
</div>


<div class="row">
<div class="clearix"></div>
<div class="col-md-12">
<div class="tile">
<h3 class="tile-title">order</h3>
<div class="tile-body">
<form  method="POST" action="{{route('order.update',$order->id)}}">
@csrf
@method('PUT')
<div class="form-group col-md-3">
<label class="control-label">Customer Name</label>
<select name="customer_id" class="form-control">

@foreach($customers as $customer)
<option name="customer_id" value="{{$customer->id}}">{{$customer->name}} </option>
@endforeach
</select>                            </div>
<div class="form-group col-md-3">
<label class="control-label">Date</label>
<input name="date"  class="form-control datepicker"  value="<?php echo date('Y-m-d')?>" type="date" placeholder="Enter your email">
</div>




<div class="form-group col-md-3">
<label class="control-label">Date</label>
<input name="date"  class="form-control datepicker"  value="<?php echo date('Y-m-d')?>" type="date" placeholder="Enter your email">
</div>



<table class="table table-bordered">
<thead>
<tr>
<th scope="col">Customer Name</th>
<th scope="col">item tittle</th>
<th scope="col">amount</th>
<th scope="col">devivery mode</th>
<th scope="col">date</th>
<th scope="col"><a class="addRow"><i class="fa fa-plus"></i></a></th>
</tr>
</thead>



<div class="form-group col-md-8">
<label class="control-label">Location</label>
<input name="location" class="form-control @error('mobile') is-invalid @enderror" type="text" placeholder="Enter location">
@error('mobile')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-8">
<label class="control-label">ITEM TIITLE</label>
<textarea name="item_tittle" class="form-control @error('address') is-invalid @enderror"></textarea>
@error('address')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-8">
<label class="control-label">Amount</label>
<textarea name="amount" class="form-control @error('details') is-invalid @enderror"></textarea>
@error('details')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-6">
<label class="control-label">Delivery mode</label>

<select name="delivery_mode" class="form-control">
<option>---Select Category---</option>
<option value="1">car </option>
<option value="2">lorry</option>
</select>

@error('delivery_mode')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-3">
<label class="control-label">Date</label>
<input name="date"  class="form-control datepicker"  value="<?php echo date('Y-m-d')?>" type="date" placeholder="Enter your email">
</div>
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="{{asset('/')}}js/multifield/jquery.multifield.min.js"></script>




<script type="text/javascript">
$(document).ready(function(){



$('tbody').delegate('.ordername', 'change', function () {

var  tr = $(this).parent().parent();
tr.find('.qty').focus();

})

$('tbody').delegate('.ordername', 'change', function () {

var tr =$(this).parent().parent();
var id = tr.find('.ordername').val();
var dataId = {'id':id};
$.ajax({
type    : 'GET',
url     :'{!! URL::route('findPrice') !!}',

dataType: 'json',
data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'id':id},
success:function (data) {
tr.find('.price').val(data.sales_price);
}
});
});

$('tbody').delegate('.qty,.price,.dis', 'keyup', function () {

var tr = $(this).parent().parent();
var qty = tr.find('.qty').val();
var price = tr.find('.price').val();
var dis = tr.find('.dis').val();
var amount = (qty * price)-(qty * price * dis)/100;
tr.find('.amount').val(amount);
total();
});
function total(){
var total = 0;
$('.amount').each(function (i,e) {
var amount =$(this).val()-0;
total += amount;
})
$('.total').html(total);
}

$('.addRow').on('click', function () {
addRow();

});

function addRow() {
var addRow = '<tr>\n' +
'         <td><select name="order_id[]" class="form-control ordername " >\n' +
'         <option value="0" selected="true" disabled="true">Select order</option>\n' +
'                                        @foreach($order as $orders)\n' +
'                                            <option value="{{$order->id}}">{{$order->name}}</option>\n' +
'                                        @endforeach\n' +
'               </select></td>\n' +
'                                <td><input type="text" name="qty[]" class="form-control qty" ></td>\n' +
'                                <td><input type="text" name="price[]" class="form-control price" ></td>\n' +
'                                <td><input type="text" name="dis[]" class="form-control dis" ></td>\n' +
'                                <td><input type="text" name="amount[]" class="form-control amount" ></td>\n' +
'                                <td><a   class="btn btn-danger remove"> <i class="fa fa-remove"></i></a></td>\n' +
'                             </tr>';
$('tbody').append(addRow);
};


$('.remove').live('click', function () {
var l =$('tbody tr').length;
if(l==1){
alert('you cant delete last one plz ot remain content')
}else{

$(this).parent().parent().remove();

}

});
});


</script>

@endpush



