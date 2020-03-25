@extends('layouts.admin')
@section('content')

<div class="container">
	<h1>Service Details</h1>
				<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-100">Booked By: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$order->user->name}} <span class="lead text-gray-600">{{$order->user->email}} </span>
</span></div>

				<div class="col-8 shadow-sm p-3 m-2 mt-3 h4 bg-green-100">Hotel: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$order->hotel->hotel_name}} 
</span></div>
				<div class="col-8 shadow-sm p-3 m-2 mt-3 h4 bg-green-100">Service Booked: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$order->service->name}} 
</span></div>

				<div class="col-8 shadow-sm p-3 m-2 mt-3 h4 bg-green-100">Duration: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$order->duration()}} 
</span></div>

				<div class="col-8 shadow-sm p-3 m-2 mt-3 h4 bg-green-100">Total Amount: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">Kshs. {{$order->total}} 
</span></div>

				<div class="col-8 shadow-sm p-3 m-2 mt-3 h4 bg-green-100">Order Status <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$order->status}} 
</span></div>

				<div class="col-8 shadow-sm p-3 m-2 mt-3 h4 bg-green-100">Date <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$order->created_at->diffForHumans()}} 
</span></div>
</div>

@endsection