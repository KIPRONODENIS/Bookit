@extends('layouts.admin')

@section('content')
<div class="m-2">
	<h1 class="h4">	Payments</h1>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>OrderID</th>
				<th>Confirmation code</th>
				<th>phone</th>
				<th>Paid At</th>
				<th>Action</th>
			</tr>
		</thead>
				<tbody>
					@foreach($payments as $payment)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$payment->order_id}}</td>
				<td>{{$payment->confirmation}}</td>
				<td>{{$payment->phone}}</td>
				<td>{{$payment->created_at}}</td>
				<td class="flex justify-around">
					<a href="{{route('admin.payments.show',$payment->id)}}"><span class="fa fa-eye text-success"></span></a>
			
					<a href="{{route('admin.payments.destroy',$payment->id)}}"><span class="fa fa-trash text-danger"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection