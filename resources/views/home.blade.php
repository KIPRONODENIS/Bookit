@extends('layouts.app')

@section('body')
<div class="container w-3/4 mt-4">
  <div class="card">
   <div class="card-header bg-white">
Dashboard <a href="{{route('profile')}}" class=" text-blue-500 text-md float-right"> View Profile</a>
   </div>
   <div>
   <h1 class="h3 text-blue-400 m-2">Your Bookings</h1>
   <hr>
   @if($orders->count()>0)
   <table class="table table-responsive table-striped  bg-green-100">
   <thead class="bg-blue-700 text-white">
     <tr>
   <th>#</th>
   <th>Hotel</th>
   <th>Service</th>
   <th>Duration</th>
   <th>Total</th>
   <th>Status</th>
     </tr>
   </thead>

   <tbody>
@foreach($orders as $order)
     <tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$order->hotel->hotel_name}}</td>
    <td>{{$order->service->name}}</td>
    <td>{{$order->duration()}} </td>
    <td>{{$order->total}}</td>
    <td>{{$order->status}}</th>
     </tr>
     @endforeach
   </tbody>
   </table>
   @else
   <div class="alert alert-info">You have no orders yet</div>
   @endif
   </div>
  </div>
  <div class="shadow rounded p-2 mt-3">
  <h1 class="h2 text-orange-500 my-3">Select a service to Book</h1>

<div class="d-flex flex-wrap">
  @foreach($services as $item)
  @include('partials.Home.service')
@endforeach
</div>
</div>
</div>
@endsection
