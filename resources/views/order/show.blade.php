@extends('layouts.master')

@section('title', 'order | ')
@section('content')
@include('partials.header')
@include('partials.sidebar')
<main class="app-content">
<div class="app-title">
<div>
<h1><i class="fa fa-file-text-o"></i> order</h1>
</div>
<ul class="app-breadcrumb breadcrumb">
<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
<li class="breadcrumb-item"><a href="#">order</a></li>
</ul>
</div>
<div class="row">
<div class="col-md-12">
<div class="tile">
<section class="order">
<div class="row mb-4">
<div class="col-6">
<h2 class="page-header"><i class="fa fa-globe"></i> J&N WHOLESALERS</h2>
</div>

</div>
<div class="row order-info">
<div class="col-4">From
<address><strong>order/s receipt.</strong><br>J&N<br>STORES<br>Email: jnstores@.com</address>
<p>Contact=><i><u>0720347932</u></i></p>
</div>
<!--  -->

<div class="row">
<div class="col-12 table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>Customer_location</th>

<th>Item/s__details</th>
<th>Date</th>
<th>Amount</th>

</tr>
</thead>
<tbody>
<div style="display: none">
{{$total=0}}
</div>
@foreach($orders as $order)
<tr>
<!-- -->

<td>{{$order->location}}</td>
<td>{{$order->item_tittle}}</td>
<td>{{$order->date}}</td>
<td>{{$order->amount}}</td>


</div>
</tr>
@endforeach
</tbody>

</tfoot>
</table>
</div>
</div>
<div class="row d-print-none mt-2">
<div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print_order</a></div>
</div>
</section>
</div>
</div>
</div>
</main>

@endsection
@push('js')
@endpush





