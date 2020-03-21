<div>
    {{-- In work, do what you enjoy. --}}
    <div class="relative bg-blue-300 top-2 ">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="flex bg-white">
    <input type="text"  class="form-control shadow border-blue-200" wire:model="searchTerm" placeholder="search services" />
<span class="fa fa-search text-gray-800 bg-white mt-2"></span>
</div>
    <ul>
    @if(count($hotels)>0)
    <h1 >Hotels</h1>
      @foreach($hotels as $hotel)
  <li class="bg-white text-primary border-b border-gray-500 m-2 p-2"><a href="{{route('hotel.show',$hotel['id'])}}">{{$hotel['hotel_name']}}
</a>
  </li>
      @endforeach
  </ul>
  @endif
  @if(count($services)>0)
      <h1 >Services</h1>
<ul>
            @foreach($services as $service)
  <li class="bg-red-500 text-white border-b border-gray-500 m-2 p-2"><a href="{{route('service.hotels',$service['id'])}}">{{$service['name']}}
</a>
  </li>
      @endforeach

    </ul>
    @endif
</div>

</div>
