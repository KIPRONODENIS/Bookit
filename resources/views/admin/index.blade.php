@extends('layouts.admin')

@section('content')

<div class="row flex flex-wrap m-2">
	<div class="card bg-red-300 text-white shadow h-50 m-2 p-2 col-3">
		<h4 class="text-success">Revenue</h4>
		<h1 class="d-inline"><span class="fa fa-money">Ksh.</span>{{$revenues}}</h1>
	</div>
		<div class="card shadow h-50 m-2 p-2 col-3">
		<h4 class="text-success"><i class="fa fa-hotel"></i>Hotels</h4>
		<h1>{{$hotels}}</h1>
	</div>
			<div class="card shadow h-50 m-2 p-2 col-3">
		<h4 class="text-success">Bookings</h4>
		<h1>{{$bookings}}</h1>
	</div>
</div>


<div class="row flex flex-wrap m-2">
	<div class="card shadow h-50 m-2 p-2 col-3">
		<h4 class="text-success"><i class="fa fa-sellsy"></i>Services</h4>
		<h1>{{$services}}</h1>
	</div>
		<div class="card shadow h-50 m-2 p-2 col-3">
		<h4 class="text-success"><i class="fa fa-user"></i>Users</h4>
		<h1>{{$users}}</h1>
	</div>
	
			<div class="card shadow h-50 m-2 p-2 col-3">
		<h4 class="text-success"><i class="fa fa-user-plus"></i>Total Withdrawals</h4>
		<h1>Ksh. {{$withdrawals}}</h1>
	</div>
</div>
@endsection