@extends('layouts.admin')

@section('content')
<div class="m-2">
		<table class="table table-responsive">
		<tr>
			<th>#</th>
			<th>Deducted From</th>
			<th>Amount</th>
			<th>Description</th>
			<th>Date</th>
		</tr>

		@if($revenues->count()>0)
       @foreach($revenues as $item)
		<tr>
			<td>{{$loop->index+1}}</td>
			<td>{{$item->user->user_type=='hotel' ?$item->user->hotel->hotel_name:$item->user->name }}</td>
			<td>{{$item->amount}}</td>
			<td>{{$item->description}}</td>
			<td>{{$item->created_at->diffForHumans()}}</td>
		</tr>
       @endforeach
		@endif
	</table>
</div>
@endsection