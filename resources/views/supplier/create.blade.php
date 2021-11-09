@extends('layouts.master')

@section('title', 'ERP | ')
@section('content')
@include('partials.header')
@include('partials.sidebar')
<main class="app-content">
<div class="app-title">
<div>
</div>
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
<a class="btn btn-primary" href="{{route('supplier.index')}}"><i class="fa fa-edit"> Supplier  detail/s </i></a>
</div>
<div class="row mt-2">

<div class="clearix"></div>
<div class="col-md-10">
<div class="tile">
<h3 class="tile-title">Supplier</h3>
<div class="tile-body">
<form method="POST" action="{{route('supplier.store')}}">
@csrf
<div class="form-group col-md-8">
<label class="control-label">Supplier Name</label>
<input name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Enter Unit Name">
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-8">
<label class="control-label">Supplier Mobile</label>
<input name="mobile" class="form-control @error('mobile') is-invalid @enderror" type="text" placeholder="Enter Unit Name">
@error('mobile')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-8">
<label class="control-label">Supplier Address</label>
<textarea name="address" class="form-control @error('address') is-invalid @enderror"></textarea>
@error('address')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-8">
<label class="control-label">Supplier Details</label>
<textarea name="details" class="form-control @error('details') is-invalid @enderror"></textarea>
@error('details')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="form-group col-md-8">
<label class="control-label">Locations</label>
<input name="locations" class="form-control @error('locations') is-invalid @enderror" type="text" placeholder="Enter Locations Name">
@error('previous_balance')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group col-md-8">
<label class="control-label">Products</label>
<input name="products" class="form-control @error('products') is-invalid @enderror" type="text" placeholder="Enter Products Name">
@error('products')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>


<div class="form-group col-md-4 align-self-end">
<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
</div>
</form>
</div>
</div>
</div>
</div>
</main>
@endsection



