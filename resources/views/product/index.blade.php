

@extends('layouts.master')

@section('titel', 'Customer | ')
@section('content')
@include('partials.header')
@include('partials.sidebar')

<main class="app-content">
<div class="app-title">
<div>
<h1><i class="fa fa-th-list"></i> Product/s Table</h1>

</div>
<ul class="app-breadcrumb breadcrumb side">
<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>

</ul>
</div>
<div class="">
<a class="btn btn-primary" href="{{route('product.create')}}"><i class="fa fa-plus"> Add <em>new </em> Product</i></a>
</div>

<div class="row mt-2">
<div class="col-md-12">
<div class="tile">
<div class="tile-body">
<table class="table table-hover table-bordered" id="sampleTable">
<thead>
<tr>
<th>Product Name </th>
<th>Product_Model </th>
<th>Sales Price</th>

<th>Action/Operation</th>
</tr>
</thead>
<tbody>
@foreach( $products as $product)
<tr>
<td>{{$product->name }}</td>
<td>{{$product->model }}</td>
<td>{{$product->sales_price }}</td>
<td>
<a class="btn btn-primary" href="{{route('product.edit', $product->id)}}"><i class="fa fa-edit" ></i></a>

<i class="fa fa-trash-o"></i>
</button>
@csrf
@method('DELETE')
</form>
</td>
</tr>
@endforeach
</tbody>
</form>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
@endsection

