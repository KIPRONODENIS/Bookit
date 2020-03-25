@extends('layouts.admin')
@section('content')
<div class="container">
	<h1>User Details</h1>
	<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Name: <span class="font-bold text-red-500 bg-white p-2 m-2 w-full">{{$user->name}}
</span></div>
<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Email: <span class="font-bold text-red-500 bg-white p-2 m-2">{{$user->email}}</span></div>

<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Phone: <span class="font-bold text-red-500 bg-white p-2 m-2">{{$user->phone}}</span></div>
<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Role: <span class="font-bold text-red-500 bg-white  p-2 m-2">{{$user->user_type}}</span></div>
@if($user->user_type=='hotel')

<div class="col-8 shadow-sm p-3 m-2 h4 bg-green-200">Hotel: <span class="font-bold text-red-500 ">{{$user->hotel->hotel_name}}</span>
<div class="col-8 shadow-sm p-3 m-2 h4 bg-white">Services: <span class="font-bold text-red-500 ">{{$user->hotel->services->count()}}</span>
	Orders:
<span class="badge badge-primary border-r border-gray-100">{{$user->orders->count()}}</span>
</div>
</div>

@endif
</div>
@endsection