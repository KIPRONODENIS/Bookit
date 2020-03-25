@extends('layouts.app')
@section('body')

<div class="row">
<div class="col-12 py-1 bg-gray-100  text-center shadow">
  <h1 class="text-4xl text-red-500">{{$hotel->hotel_name}}</h1>
<h1 class="my-2">Location:{{$hotel->location}}</h1>
<p class="my-2">Phone:{{$hotel->user->phone}}</p>
</div>
</div>


<div class="row flex flex-wrap">
  <div class="col-4 p-2">
    @auth
@livewire('message',$hotel->id,'user')
@endauth
  </div>
  <div class="col-8 flex flex-wrap">
      <h1 class="text-4xl border-red-100 border-t-none text-center text-teal-500 w-full">Our Services</h1>
  @foreach($services as $service)
 <div class=" col-3 card mx-4 py-2 shadow-sm">
<h4 class="text-md text-gray-500">{{$service->name}}</h4>
<p class="my-2 ">Ksh. {{$service->pivot->price_per_hour}}/{{$service->per}}</p>

      @php
 
$item=\App\HotelService::where('hotel_id',$hotel->id)->where('service_id',$service->id)->first();
$id=$item->id;
   @endphp
   @php $items=$item->ratings->average('rate') ?? 0 @endphp 
<div class="bottom my-3 text-left">
           <div class="rating flex m-2">

@for($i=1;$i<=5;$i++)

@if($i<=$items)
 @php $class="text-yellow-500" @endphp
 <span class="fa fa-star  {{$class ?? ''}}"></span>
 @else
  <span class="fa fa-star  "></span>
@endif


@endfor

</div>
@if(!$item->rated->count()>0)
    <a class="btn btn-primary btn-twitter btn-sm" href="#" data-toggle="modal" data-target="#rate{{$hotel->id.''.$service->id}}">
  Rate
    </a>
    @endif

    <a class="btn btn-danger btn-sm" rel="publisher"
      href="/hotel/{{$hotel->id}}/book/{{$service->id}}">
    Book this
    </a>




<!-- Modal -->
<form class="modal fade" id="rate{{$hotel->id.''.$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" method="post" action="{{route('service.rate')}}">

  @csrf 

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-red-900">
        <h5 class="modal-title text-white text-xl" id="exampleModalLabel">Rate <span class="text-primary ">{{$service->name}}</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
        <input type="hidden" name="service" value="{{$id}}">
         <label>Choose Rate</label>
    <select class="form-control" name="rate">
      <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
    </select>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success p-2">Save changes</button>
      </div>
    </div>
  </div>
</form>
    <!-- <a href="/book/{{$hotel['id']}}/form" class="btn btn-warning btn-sm shadow-sm" rel="publisher" wire:click="bookthis({{$hotel['id']}})">
      Book this
    </a> -->
</div>

 
 </div>

  @endforeach
</div>
<div>
</div>
</div>

@endsection
