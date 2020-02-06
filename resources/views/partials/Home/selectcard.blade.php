

<div class="card hovercard col-3 mx-3 my-3 " id="selectcard" key="{{$hotel['id']}}">
    <div class="cardheader">

    </div>

    <div class="info" >
        <div class="title">
            <a target="_blank" class="h4" href="https://scripteden.com/">
{{$hotel->hotel_name}}</a>
        </div>
        <div class="desc d-flex "><img class="bg-blue-700 text-white" src="/icons/location_city.svg"/>{{$hotel->location}}</div>
        <div class="desc">{{$service->name}}</div>
        <div class="desc">Ksh {{$hotel->pivot->price_per_hour}}/hour</div>
    </div>
    <div class="bottom my-3 text-left">
        <!-- <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
          Learn More
        </a> -->
        <a class="btn btn-danger btn-sm" rel="publisher"
          href="/book/{{$hotel['id']}}/form">
        Book this
        </a>
        <!-- <a href="/book/{{$hotel['id']}}/form" class="btn btn-warning btn-sm shadow-sm" rel="publisher" wire:click="bookthis({{$hotel['id']}})">
          Book this
        </a> -->
    </div>
</div>
