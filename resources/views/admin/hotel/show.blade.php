@extends('layouts.admin')
@section('content')
<div class="container">
	<h1>Hotel Details</h1>
		<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Name: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$hotel->hotel_name}}
</span></div>

		<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Located at: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$hotel->location}}
</span></div>

		<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200"> <span class=" p-2 m-2 w-full"><img src="{{asset('storage/'.$hotel->image)}}" height="200" width="200">
</span>
<div class="flex">
<h4 class="mx-2">Orders : <span class="badge badge-success">{{$hotel->orders->count()}}</span></h4>
<h4 class="mx-2">Services : <span class="badge badge-success">{{$hotel->services->count()}}</span></h4>
</div>
</div>

		<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Registered By: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$hotel->user->name}}
</span></div>
</div>

@endsection