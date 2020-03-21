@extends('hotel')

@section('contents')
<h1 class="h2">Received Bookings</h1>
<table class="table mt-10 w-full">
<thead class="bg-blue-400">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Duration</th>
    <th>Status</th>
    <th>Date</th>
    <th>Amount</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  @if($orders->count()>0)
  @foreach($orders as $order)
  <tr>
  <td>{{$loop->index+1}}</td>
  <td>{{$order->service->name}}</td>

  <td>{{$order->duration()}}</td>
  <td>{{$order->status}}</td>
  <td>{{$order->created_at->diffForHumans()}}</td>
  <td>{{$order->total}}</td>
  <td class="flex justify-around">
<a href="#" class="btn btn-success">Update Status</a>

  </td>
</tr>
@endforeach

@else
<tr>
<td colspan="6"></td>
</tr>
  @endif
</tbody>
</table>
@endsection
