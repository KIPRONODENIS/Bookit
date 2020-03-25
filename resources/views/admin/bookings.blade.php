@extends('layouts.admin')

@section('content')
<div class="m-2">
	<h1 class="h4">	Bookings</h1>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Booked By</th>
				<th>Hotel</th>
				<th>Service</th>
				<th>Duration</th>
				<th>Total</th>
				<th>Status</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>
			<tbody>
				@foreach($orders as $order)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$order->user->name}}</td>
				<td>{{$order->hotel->hotel_name}}l</td>
				<td>{{$order->service->name}}</td>
				<td>{{$order->duration()}}</td>
				<td>{{$order->total}}</td>
				<td>{{$order->status}}</td>
				<td>{{$order->created_at}}</td>
							
								<td class="flex justify-around">
					<a href="{{route('admin.bookings.show',$order->id)}}"><span class="fa fa-eye text-success"></span></a>
				
					<a  href="{{route('admin.bookings.destroy',$order->id)}}"><span  class="fa fa-trash text-danger"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection