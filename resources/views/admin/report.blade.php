@extends('layouts.admin')

@section('content')
<div class="container">
<div class="row bg-gray-400 mt-3">
	<h3 class="font-bold m-2">Last 1 Week</h3>
	<table class="table table-reponsive">
		<tr>
		<th class="text-indigo-800">Users<span class="fa fa-user"></span></th>
		<th class="text-indigo-800">Revenue <span class="fa fa-money"></span></th>
		<th class="text-indigo-800">Bookings<span class="fa fa-sellbuyads"></span></th>
		<th class="text-indigo-800"> Hotels<span class="fa fa-hotel"></span></th>
		<th class="text-indigo-800"> Services<span class="fa fa-sellsy"></span></th>
	</tr>
			<tr>
		<td>{{$week['users']}}</td>
		<td> ksh. {{$week['revenue']}}</td>
		<td>{{$week['bookings']}}</td>
		<td>{{$week['hotels']}}</td>
		<td>{{$week['services']}}</td>
	</tr>
	</table>
</div>

<div class="row bg-green-200 mt-3">
	<h3 class="font-bold m-2">Last one Month</h3>
	<table class="table table-reponsive">
		<tr>
		<th class="text-indigo-800">Users<span class="fa fa-user"></span></th>
		<th class="text-indigo-800">Revenue <span class="fa fa-money"></span></th>
		<th class="text-indigo-800">Bookings<span class="fa fa-sellbuyads"></span></th>
		<th class="text-indigo-800"> Hotels<span class="fa fa-hotel"></span></th>
		<th class="text-indigo-800"> Services<span class="fa fa-sellsy"></span></th>
	</tr>
			<tr>
		<td>{{$month['users']}}</td>
		<td> ksh. {{$month['revenue']}}</td>
		<td>{{$month['bookings']}}</td>
		<td>{{$month['hotels']}}</td>
		<td>{{$month['services']}}</td>
	</tr>
	</table>
</div>

<div class="row bg-gray-200 mt-3">
	<h3 class="font-bold m-2">Last 3 Months</h3>
	<table class="table table-reponsive">
		<tr>
		<th class="text-indigo-800">Users<span class="fa fa-user"></span></th>
		<th class="text-indigo-800">Revenue <span class="fa fa-money"></span></th>
		<th class="text-indigo-800">Bookings<span class="fa fa-sellbuyads"></span></th>
		<th class="text-indigo-800"> Hotels<span class="fa fa-hotel"></span></th>
		<th class="text-indigo-800"> Services<span class="fa fa-sellsy"></span></th>
	</tr>
			<tr>
		<td>{{$_3months['users']}}</td>
		<td> ksh. {{$_3months['revenue']}}</td>
		<td>{{$_3months['bookings']}}</td>
		<td>{{$_3months['hotels']}}</td>
		<td>{{$_3months['services']}}</td>
	</tr>
	</table>
</div>
<div class="row bg-green-200 mt-3">
	<h3 class="font-bold m-2">Last 6 Months</h3>
	<table class="table table-reponsive">
		<tr>
		<th class="text-indigo-800">Users<span class="fa fa-user"></span></th>
		<th class="text-indigo-800">Revenue <span class="fa fa-money"></span></th>
		<th class="text-indigo-800">Bookings<span class="fa fa-sellbuyads"></span></th>
		<th class="text-indigo-800"> Hotels<span class="fa fa-hotel"></span></th>
		<th class="text-indigo-800"> Services<span class="fa fa-sellsy"></span></th>
	</tr>
			<tr>
		<td>{{$_6months['users']}}</td>
		<td> ksh. {{$_6months['revenue']}}</td>
		<td>{{$_6months['bookings']}}</td>
		<td>{{$_6months['hotels']}}</td>
		<td>{{$_6months['services']}}</td>
	</tr>
	</table>
</div>
<div class="row bg-gray-200 mt-3">
	<h3 class="font-bold m-2">This Year</h3>
	<table class="table table-reponsive">
		<tr>
		<th class="text-indigo-800">Users<span class="fa fa-user"></span></th>
		<th class="text-indigo-800">Revenue <span class="fa fa-money"></span></th>
		<th class="text-indigo-800">Bookings<span class="fa fa-sellbuyads"></span></th>
		<th class="text-indigo-800"> Hotels<span class="fa fa-hotel"></span></th>
		<th class="text-indigo-800"> Services<span class="fa fa-sellsy"></span></th>
	</tr>
			<tr>
			<td>{{$_year['users']}}</td>
		<td> ksh. {{$_year['revenue']}}</td>
		<td>{{$_year['bookings']}}</td>
		<td>{{$_year['hotels']}}</td>
		<td>{{$_year['services']}}</td>
	</tr>
	</table>
</div>
</div>
@endsection