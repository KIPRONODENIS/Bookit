@extends('layouts.admin')

@section('content')
<div class="m-2">
	<h1 class="h4">	Hotels <button class="float-right btn btn-success" data-toggle="modal" data-target="#AddHotelModal"><span class="fa fa-plus "></span>Add New</button></h1>

<!-- Modal -->
<form class="modal fade" id="AddHotelModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true" action="{{route('admin.hotel.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-green-500 text-white">
        <h5 class="modal-title" id="serviceModalLabel">Add New Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="row register-form">
    <div class="col-md-10 mx-auto">



        <div class="form-group m-2">
                      <label>Hotel Name</label>
            <input type="text" name="hotel_name" class="form-control" placeholder="Name of the Hotel *" value="{{old('hotel_name')}}"/>
            @error('hotel_name')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('hotel_name')}}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group m-2">
          <label>Where are you located</label>
            <select   name="location" class="form-control"  selected="{{old('location')}}" >
<option value="" selected >None selected</option>
<option>Nairobi</option>
<option>Meru</option>
<option>Makutano</option>
<option>Maua</option>
            </select>
            @error('phone')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('location')}}</strong>
            </span>
            @enderror
        </div>



        <div class="form-group m-2">
            <div class="maxl">
            <label>Upload image</label>
            <input type="file" name="image">
            </div>
            @error('image')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('image')}}</strong>
            </span>
            @enderror
        </div>
        <div class="h-10"></div>
            <input type="hidden" name="user_type"  value="hotel"/>
        


    </div>

    </div>
      </div>
      <div class="modal-footer">
  
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</form>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Location</th>
				<th>Image</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>
				<tbody>
					@foreach($hotels as $hotel)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$hotel->hotel_name}}</td>
				<td>{{$hotel->location}}</td>
				<td><img src="{{asset('storage/'.$hotel->image)}}" height="100" width="100"></td>
				<td>{{$hotel->created_at}}</td>
								<td class="flex justify-around">
					<a href="{{route('admin.hotel.show',$hotel->id)}}"><span class="fa fa-eye text-success"></span></a>
					<a data-toggle="modal" data-target="#edit_hotel{{$hotel->id}}" ><span class="fa fa-edit text-primary"></span></a>

<!-- Modal -->
<div id="edit_hotel{{$hotel->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title h3 font-bold text-green-500">Edit Hotel</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">

        <div class="w-full max-w-xs mx-auto">
          <form method="post" action="{{route('admin.hotel.update')}}" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
           @csrf
           @method('put')
           <input type="hidden" name="hotel" value="{{$hotel->id}}">
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="hotel_name">
              Hotel name
              </label>
              <input class="shadow appearance-none border @error('hotel_name'){{'border-red-500'}} @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="username" type="text" value="{{old('hotel_name') ?? $hotel->hotel_name}}" name="hotel_name" >
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

					<a href="{{route('admin.hotel.destroy',$hotel->id)}}"><span class="fa fa-trash text-danger"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection