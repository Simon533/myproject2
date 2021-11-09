@extends('layouts.master')

@section('title', 'Order| ')
@section('content')
@include('partials.header')
@include('partials.sidebar')
<main class="app-content">
<div class="app-title">
<div>
<h1><i class="fa fa-check-circle"></i>ORDERS</h1>
<p>Enter order'/s</p>
</div>
<ul class="app-breadcrumb breadcrumb">
<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
<li class="breadcrumb-item">Forms</li>

<li class="breadcrumb-item"><i class="fa fa-check fa-lg"></i></li>
</ul>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif
<div class="">
<a class="btn btn-primary" href="{{route('order.index')}}"><i class="fa fa-edit">Order </i></a>
</div>


<div class="row">
<div class="clearix"></div>
<div class="col-md-12">
<div class="tile">
<h3 class="tile-title">order</h3>
<div class="tile-body">

<form  method="POST" action="{{route('order.store')}}">
@csrf

<div class="form-group col-md-3">
<label class="control-label">Customer Name</label>
<select name="customer_id" class="form-control">
<option>Select Customer</option>
@foreach($customers as $customer)
<option name="customer_id" value="{{$customer->id}}">{{$customer->name}} </option>
@endforeach
</select>                            </div>
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
<option value="car">car </option>
<option value="lorry">lorry</option>
<option value="tuktuk">lorry</option>
<option value="motorbike">motorbike</option>
<option value="trailer">trailer</option>
<option value="pickup">pickup</option>
<option value="Airlifing">Airlifitng</option>
<option value="Person">Person</option>
</select>

@error('delivery_mode')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-4 align-self-end">
<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>New_Order</button>
</div>
</form>
</div>
</div>
</div>
</div>
</main>

</form>
</div>
</div>


</div>
</div>






</main>

@endsection
<!--  -->
