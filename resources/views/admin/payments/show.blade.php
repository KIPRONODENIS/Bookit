@extends('layouts.admin')
@section('content')

<div class="container">
	<h1>Service Details</h1>
				<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-100">Confirmation Code: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$payment->confirmation}}
</span></div>
				<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-100">Phone No: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$payment->phone}}
</span></div>
				<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-100">Paid  at: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$payment->created_at->diffForHumans()}}
</span></div>
				<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-100">Hotel: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$payment->order->hotel->hotel_name}}
</span></div>
				<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-100">Service Ordered: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$payment->order->service->name}}
</span></div>
</div> 
@endsection