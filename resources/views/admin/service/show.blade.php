@extends('layouts.admin')
@section('content')

<div class="container">
	<h1>Service Details</h1>
			<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Name: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$service->name}}
</span></div>

			<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Rate: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$service->per}}
</span></div>
			<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Hotels offering the service: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$service->hotels->count()}} hotels
</span></div>

			<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Total Orders: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$service->orders->count()}} orders
</span></div>


</div>

@endsection