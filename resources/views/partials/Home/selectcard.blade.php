<div class="card hovercard col-6 mx-auto my-3 " id="selectcard" key="{{$item['id']}}">
    <div class="cardheader">

    </div>

    <div class="info" >
        <div class="title">
            <a target="_blank" class="h4" href="https://scripteden.com/">
{{$item['hotel_name']}}</a>
        </div>
        <div class="desc d-flex "><img class="bg-blue-700 text-white" src="/icons/location_city.svg"/>{{$item['location']}}</div>
        <div class="desc">Curious developer</div>
        <div class="desc">Tech geek</div>
    </div>
    <div class="bottom">
        <!-- <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
          Learn More
        </a> -->
        <a class="btn btn-danger btn-sm" rel="publisher"
           href="https://plus.google.com/+ahmshahnuralam">
          Learn More
        </a>
        <button class="btn btn-warning btn-sm shadow-sm" rel="publisher" wire:click="bookthis({{$item['id']}})">
          Book this
        </button>
    </div>
</div>
