@extends('layouts.admin')

@section('content')
<div class="m-2">
		<h1 class="h4 font-bold text-green-500">Withdawals History</h1>
	<table class="table table-responsive">
		<tr>
			<th>#</th>
			<th>Amount</th>
			<th>Hotel</th>
			<th>Date</th>
		</tr>

		@if($withdrawals->count()>0)
       @foreach($withdrawals as $item)
		<tr>
			<td>{{$loop->index+1}}</td>
			<td>{{$item->amount}}</td>
			<td>{{$item->hotel->hotel_name}}</td>
			<td>{{$item->created_at->diffForHumans()}}</td>
		</tr>
       @endforeach
		@endif
	</table>
</div>

@endsection