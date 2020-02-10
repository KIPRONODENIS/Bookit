@extends('layouts.app')
@section('body')

<div class="row">
<div class="col-12 py-1 bg-gray-100  text-center shadow">
  <h1 class="text-4xl text-red-500">{{$hotel->hotel_name}}</h1>
<h1 class="my-2">Location:{{$hotel->location}}</h1>
<p class="my-2">Phone:{{$hotel->user->phone}}</p>
</div>
</div>
<div class="row mx-5 py-2">
  <h1 class="text-4xl border-red-100 border-t-none text-center text-teal-500">Our Services</h1>
</div>
<div class="flex flex-wrap">
  @foreach($services as $service)
 <div class=" col-3 card mx-4 py-2 shadow-sm">
<h4 class="text-md text-gray-500">{{$service->name}}</h4>
<p class="my-2 ">Ksh. {{$service->pivot->price_per_hour}}/{{$service->per}}</p>

<div class="bottom my-3 text-left">
    <!-- <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
      Learn More
    </a> -->
    <a class="btn btn-danger btn-sm" rel="publisher"
      href="/hotel/{{$hotel->id}}/book/{{$service->id}}">
    Book this
    </a>
    <!-- <a href="/book/{{$hotel['id']}}/form" class="btn btn-warning btn-sm shadow-sm" rel="publisher" wire:click="bookthis({{$hotel['id']}})">
      Book this
    </a> -->
</div>
 </div>

  @endforeach
<div>
</div>
</div>

@endsection
