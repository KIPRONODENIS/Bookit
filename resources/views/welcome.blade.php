@extends('layouts.app')

@section('body')
<header>
  <div class="overlay"></div>


  <div class="container h-screen" style="background:url('/images/bg.jpg');background-position:center;">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-1" style="color:#fc4a1a">Welcome to Book it</h1>

        <p class="lead mb-0"> A platform to Book A service From Any Hotel</p>
        @guest
        <a  href="route('register')" class="btn btn-primary btn-lg shadow my-3" >Create an Account</a>
       @else
       <a href="{{route('home')}}" class="btn btn-primary btn-lg shadow my-3" >Dashboard</a>

        @endguest
      </div>
    </div>
  </div>
</header>

<section class="mb-5 py-5">
  <div class="container">

    <div class="row bg-gray-200">

      <div class="col-md-10 mx-auto">
         <h1 class="display-4 text-center my-5 text-primary" >Featured Hotels</h1>
          <p class="lead text-center m-3 w-1/2 mx-auto">The following are alist of hotels you can choose to book a service from. They have a variety of service with the best deals ever</p>
         <div class="h-10"></div>

       <!-- Team -->
<section id="team" class="pb-5 ">
    <section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">

    </div>
    <ul class="row flex flex-wrap justify-around list-unstyled">

@foreach($hotels as $hotel)
      <li class="col-4 px-3 mb-3">
          <div class="cnt-block equal-hight border-red-500 border-1 rounded shadow bg-white" >
            <figure><img src="{{asset('storage/'.$hotel->image)}}" class="img-responsive" alt="" style="height:250px !important;"></figure>
            <h3 class="h2 mx-2"><a href="http://www.webcoderskull.com/" style="color:#fc4a1a">{{$hotel->hotel_name}}</a></h3>
            <p class="mx-2">{{$hotel->services->count()}} service(s)</p>


            <div class='spacer h-5'></div>
           <div class="mx-2 flex justify-between">
               <h3 class="mx-2 font-bold text-xl my-2 text-green-500"><span class="fas fa-map-pin">{{$hotel->location}}</span></h3>
             <a class="btn btn-primary  " href="{{route('hotel.show',$hotel->id)}}" class="text-blue-500">View</a>

           </div>
             <div class='spacer h-5'></div>
          </div>
      </li>

      @endforeach


    </ul>
  </div>
</section>
</section>
      </div>
    </div>

        <div class="row mt-5">
      <div class="col-md-8 mx-auto">
        <h1 class="display-4 text-center my-5 text-primary" >Services to Book</h1>
         <p class="lead text-center m-3 w-1/2 mx-auto">The following are alist of services you can choose to book a service from. They have a variety of service with the best deals ever</p>
        <div class="h-10"></div>

      </div>
    </div>
        <div class="row mt-5">
      <div class="col-md-9 mx-auto">

         <ul class="row flex flex-wrap justify-around list-unstyled">
           @foreach($services as $service)
      <li class="col-4 px-3 ">
          <div class="cnt-block equal-hight border-red-500 border-1 rounded shadow px-3 w-full" >
            <figure><img src="{{asset('images/Optimized-catering.jpg')}}" class="img-responsive card-img-top w-full" alt="" ></figure>
            <h3 class="my-2 text-xl text-gray-500 font-bold" >{{$service->name}}</h3>


            <h3 >Providers:<a href="http://www.webcoderskull.com/" class="text-green-500 bold">{{$service->hotels->count()}} Hotels</a></h3>
            <div class='spacer h-5'></div>
           <div class="mx-3 flex justify-between my-2 mb-5">

             <a href="{{route('service.hotels',$service->id)}}" class="btn btn-success border border-1 border-solig-red mb-2"> Find More <span class="caret"></span></a>
           </div>
          </div>
      </li>
          @endforeach

    </ul>

      </div>
    </div>

  </div>
</section>
<section id="wanted">

</section>
@endsection
