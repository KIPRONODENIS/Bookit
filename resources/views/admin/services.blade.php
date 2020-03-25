@extends('layouts.admin')

@section('content')
<div class="m-2">

	<h1 class="h4 my-2">	Services<button class="float-right btn btn-success" data-toggle="modal" data-target="#serviceModal"><span class="fa fa-plus "></span>Add New</button></h1>

<!-- Modal -->
<form class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true" action="{{route('admin.service.store')}}" method="post">
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
      <div class="form-group">
		<label>Enter Name</label>
		<input type="text" name="name" class="form-control" value="{{old('name')}}">
		@error('name')
<p class="text-red-500">{{$message}}</p>
		@enderror
	</div>

		 <div class="form-group">
		<label>Rate </label>
		<select type="text" name="rate" class="form-control">
			<option >Hour</option>
			<option >Person</option>
			<option >Item</option>
			
		</select>
	</div>

      </div>
      <div class="modal-footer">
  
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</form>
	<table class="table table-responsive mt-4">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				
				<th>Rate</th>
				<th>Action</th>
			</tr>
		</thead>
				<tbody>
					@foreach($services as $service)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$service->name}}</td>
				
				<td>{{$service->per}}</td>
				<td class="flex justify-around">
					<a href="{{route('admin.service.show',$service->id)}}"> <span class="fa fa-eye text-success"></span></a>
					<a data-toggle="modal" data-target="#editServiceModal{{$service->id}}"><span class="fa fa-edit text-primary"></span></a>
					<a href="{{route('admin.service.destroy',$service->id)}}"><span class="fa fa-trash text-danger"></span></a>

<!-- Modal -->
<form class="modal fade" id="editServiceModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true" action="{{route('admin.service.update',$service->id)}}" method="post">
	@csrf
	@method('put')
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-green-500 text-white">
        <h5 class="modal-title" id="serviceModalLabel">Add New Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
		<label>Enter Name</label>
		<input type="text" name="name" class="form-control" value="{{old('name') ?? $service->name}}">
		@error('name')
<p class="text-red-500">{{$message}}</p>
		@enderror
	</div>

		 <div class="form-group">
		<label>Rate </label>
		<select type="text" name="rate" class="form-control">
			<option {{$service->per=="Hour"? 'selected':''}}>Hour</option>
			<option {{$service->per=="Person"? 'selected':''}}>Person</option>
			<option {{$service->per=="Item"? 'selected':''}}>Item</option>
			
		</select>
	</div>

      </div>
      <div class="modal-footer">
  
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection