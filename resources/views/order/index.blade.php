

@extends('layouts.master')

@section('titel', 'Order | ')
@section('content')
@include('partials.header')
@include('partials.sidebar')

<main class="app-content">
<div class="app-title">
<div>
<h1><i class="fa fa-th-list"></i> Customer Page</h1>

</div>
<ul class="app-breadcrumb breadcrumb side">
<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
<li class="breadcrumb-item">Customer'/s Orders</li>
<li class="breadcrumb-item active"><a href="#"></a></li>
</ul>
</div>
<div class="">
<a class="btn btn-primary" href="{{route('order.create')}}"><i class="fa fa-plus"> order_Create</i></a>
</div>

<div class="row mt-2">
<div class="col-md-12">
<div class="tile">
<div class="tile-body">
<table class="table table-hover table-bordered" id="sampleTable">
<thead>
<tr>

<th>Customer ID </th>
<td>Item tittle</td>
<th>Amount </th>
<th>Date_Order </th>
<th>location </th>
<th>devivery mode </th>
<th>Date Inputed</th>
<th>Operation/Task</th>
</tr>
</thead>
<tbody>

@foreach($orders as $order)
<tr>

<td>{{$order->customer_id}}</td>
<td>{{$order->item_tittle}}</td>
<td>{{$order->amount}}</td>
<td>{{$order->date }}</td>
<td>{{$order->location}}</td>
<td>{{$order->delivery_mode}}</td>
<td>{{$order->created_at->format('Y-m-d')}}</td>
<td>
<a class="btn btn-primary" href="{{route('order.show', $order->id)}}"><i class="fa fa-bandcamp" ></i></a>
<!-- <a class="btn btn-primary" href="{{route('order.edit', $order->id)}}"><i class="fa fa-edit" ></i></a> -->

<button class="btn btn-danger waves-effect" type="submit" onclick="deleteTag({{ $order->id }})">
<i class="fa fa-trash-o"></i>
</button>
<form id="delete-form-{{ $order->id }}" action="{{ route('order.destroy',$order->id) }}" method="POST" style="display: none;">
@csrf
@method('DELETE')
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>



@endsection

@push('js')
<script type="text/javascript" src="{{asset('/')}}js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript">
function deleteTag(id) {
swal({
title: 'Are you sure?',
text: "You won't be able to see the information abpout the customer again!",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it dont want !',
cancelButtonText: 'No, cancel!',
confirmButtonClass: 'btn btn-success',
cancelButtonClass: 'btn btn-danger',
buttonsStyling: false,
reverseButtons: true
}).then((result) => {
if (result.value) {
event.preventDefault();
document.getElementById('delete-form-'+id).submit();
} else if (

result.dismiss === swal.DismissReason.cancel
) {
swal(
'Cancelled',
'Your data is safe now plz :)',
'error'
)
}
})
}
</script>
@endpush
