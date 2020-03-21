


  <div class="col-3 px-3 mb-3">
      <div class="cnt-block equal-hight border-red-500 border-1 rounded shadow bg-white" >
        <figure><img src="{{asset('storage/'.$hotel->pivot->image)}}" class="img-responsive" alt="" style="height:250px !important;"></figure>
        <h3 class="h2 mx-2"><a href="{{route('hotel.show',$hotel->id)}}" style="color:#fc4a1a">{{$hotel->hotel_name}}</a></h3>

      <div class="desc mx-2 text-xl text-gray-800">{{$service->name}}</div>
           <div class='spacer h-5'></div>
                 @php
 
$item=\App\HotelService::where('hotel_id',$hotel->id)->where('service_id',$service->id)->first();
$id=$item->id;
   @endphp
   @php $items=$item->ratings->average('rate') ?? 0 @endphp 

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
  <div class="desc mx-2">Ksh {{$hotel->pivot->price_per_hour}}/{{$service->per}}</div>
        <div class='spacer h-5'></div>
       <div class="mx-2 flex justify-between">
           <h3 class="mx-2 font-bold text-xl my-2 text-green-500"><span class="text-green-500 fa fa-map-marker mx-2"></span>{{$hotel->location}}</h3>
           
         <a class="btn  btn-primary  shadow-sm " href="/hotel/{{$hotel->id}}/book/{{$service->id}}" class="text-blue-500">Book</a>

       </div>
         <div class='spacer h-5'></div>
      </div>
  </div>
