@extends('layouts.master')

@section('title', 'Product | ')
@section('content')
@include('partials.header')
@include('partials.sidebar')
<main class="app-content">
<div class="app-title">
<ul class="app-breadcrumb breadcrumb">
<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>

</ul>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif

<div class="">
<a class="btn btn-primary" href="{{route('product.index')}}"><i class="fa fa-edit">Products</i></a>
</div>
<div class="row mt-2">

<div class="clearix"></div>
<div class="col-md-10">
<div class="tile">
<h3 class="tile-title">Product</h3>
<div class="tile-body">
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="form-group col-md-6">
<label class="control-label">Product Name</label>
<input name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Product Name">
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-6">
<label class="control-label">Serial Number</label>
<input name="serial_number" class="form-control @error('serial_number') is-invalid @enderror" type="number" placeholder="Enter e.g 1,2,2">
@error('serial_number')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="form-group col-md-6">
<label class="control-label">Model</label>
<input name="model" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Enter Product/s model">
@error('model')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-6">
<label class="control-label">Category</label>

<select name="category_id" class="form-control">
<option>---Select Category---</option>
<option value="1">Convenience  </option>
<option value="2">shoppings </option>
<option value="3">specialty  </option>
<option value="4">niche Products </option>
<option value="5">complimentary </option>
</select>

@error('category_id')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="form-group col-md-6">
<label class="control-label">Sale Price</label>
<input name="sales_price" class="form-control @error('sales_price') is-invalid @enderror" type="number" placeholder="Enter sales_price e.g 10shs,1M ">
@error('sales_price')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-6">
<label class="control-label">Unit</label>
<select name="unit_id" class="form-control">
<option>---Select Unit---</option>
<option value="11">(m)</option>
<option value="22">(kg)</option>
<option value="33">(a)</option>
<option value="44">(mol)</option>
<option value="55">(cd)</option>
</select>
@error('unit_id')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="form-group col-md-4 align-self-end">
<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
</div>

</form>
</div>
</div>
</div>
</div>

</main>



