
@extends('layouts.app')
@section('body')
<div class="container w-3/4">
  <div class="bg-white row flex  my-3 justify-between shadow">
<img class="image-responsive shadow" height="150" width="200" src="{{asset('storage/'.Auth::user()->hotel->image)}}">
<div class="card w-1/2 bg-gray- p-3">
<h1 class="h3" style="color:#fc4a1a">{{Auth::user()->hotel->hotel_name}}</h1>

<p class="h4 text-green-500 my-2">{{Auth::user()->hotel->services->count()}} Service(s) </p>
<div class="flex">
<a class="text-primary mt-1  mx-2" href="{{route('hotel.orders')}}">Orders <span class="badge badge-success">3</span></a>
<a class="text-primary mt-1  " href="{{route('hotel.messages')}}">Messages <span class="badge badge-danger">3</span></a>
</div>
<div class="flex justify-between">
<a class="text-white btn btn-primary mt-5 "  data-toggle="modal" data-target="#edit_hotel" >Edit</a>

<a class="text-white btn btn-success mt-5 font-bold text-md " data-toggle="modal" data-target="#add_service" >Add New Service</a>

<!-- Modal -->
<div id="add_service" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title h3 font-bolder text-red-400">Add New Service</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">

                <div class="w-full max-w-xs mx-auto">
                  <form method="post" action="{{route('hotel.store')}}" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                   @csrf

                    <div class="mb-4">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                      Choose A Service
                      </label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Service</label>
                        </div>
                        <select name="service" class="custom-select" id="inputGroupSelect01">
                          <option value='' selected>Choose a service</option>
                          @foreach($categories as $category)
                          <option value="{{$category->id}}" @if(old('service')==$category->id) {{"selected"}} @endif >{{$category->name}}</option>

                          @endforeach
                        </select>
                      </div>
                    </div>
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price_per_hour">
        Price Per Hour
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="price_per_hour" type="number" value="{{old('price_per_hour')}}">
        </div>
                    <div class="mb-6">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                        Upload New Image
                      </label>
                <div class="input-group mb-3">

            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

                    </div>
                    <div class="flex items-center justify-between">
                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Create
                      </button>

                    </div>
                  </form>
                  <p class="text-center text-gray-500 text-xs">
                    &copy;2020 Bookit.com . welcome.
                  </p>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="edit_hotel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title h3 font-bold text-green-500">Edit Hotel</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">

        <div class="w-full max-w-xs mx-auto">
          <form method="post" action="{{route('hotel.update')}}" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
           @csrf
           @method('put')
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="hotel_name">
              Hotel name
              </label>
              <input class="shadow appearance-none border @error('hotel_name'){{'border-red-500'}} @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="username" type="text" value="{{old('hotel_name') ?? Auth::user()->hotel->hotel_name}}" name="hotel_name" >
              @error('hotel_name')
  <p class="text-red-500 text-xs italic">{{$message}}</p>
              @enderror
            </div>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                Upload New Image
              </label>
        <div class="input-group mb-3">

    <div class="custom-file">
      <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
  </div>

            </div>
            <div class="flex items-center justify-between">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Save
              </button>

            </div>
          </form>
          <p class="text-center text-gray-500 text-xs">
            &copy;2020 Bookit.com . welcome.
          </p>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



</div>
</div>
  </div>

@yield('contents')

</div>
@endsection
