@extends('layouts.admin')

@section('content')
<div class="m-2">
<h1 class="h4 my-2">	Users <button class="float-right btn btn-success" data-toggle="modal" data-target="#userModal"><span class="fa fa-plus "></span>Add New</button></h1>

<!-- Modal -->
<form class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true" method="post" action="{{route('admin.store')}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h3 class="register-heading">Add New Client</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
@csrf


    <div class="row register-form">
        <div class="col-md-6">
            <div class="form-group">

                <input type="text" class="form-control" name="name" placeholder="Full Name *" value="{{old('name')}}" />
   @error('name')
   <span class=" text-red-800" role="alert">
       <strong>{{ $errors->first('name')}}</strong>
   </span>
   @enderror

            </div>


            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password *" />
                @error('password')
                <span class=" text-red-800" role="alert">
                    <strong>{{ $errors->first('password')}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input name="password_confirmation" type="password" class="form-control"  placeholder="Confirm Password *" value="" />
            </div>
         

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" 
                name="email" 
                placeholder="Your Email *" 

                value="{{old('email')}}"

          
                 required />
                @error('email')
                <span class=" text-red-800" role="alert">
                    <strong>{{ $errors->first('email')}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="{{old('phone')}}" required pattern='^0\d{9}'/>
                @error('phone')
                <span class=" text-red-800" role="alert">
                    <strong>{{ $errors->first('phone')}}</strong>
                </span>
                @enderror
            </div>



            <input type="hidden" name="user_type"  value="client"/>
      
        </div>
    </div>

      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</form>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>User Type</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->user_type}}</td>
				<td class="flex justify-around">
					<a href="{{route('admin.user.show',$user->id)}}"><span class="fa fa-eye text-success"></span></a>
					<a data-toggle="modal" data-target="#editUser{{$user->id}}"><span class="fa fa-edit text-primary"></span><a>

<!-- Modal -->
<form class="modal fade" id="editUser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true" method="post" action="{{route('admin.user.update',$user->id)}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h3 class="register-heading">Edit User</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
@csrf
@method('put')

    <div class="row register-form">
        <div class="col-md-6">
            <div class="form-group">

                <input type="text" class="form-control" name="name" placeholder="Full Name *" value="{{old('name') ?? $user->name}}" />
   @error('name')
   <span class=" text-red-800" role="alert">
       <strong>{{ $errors->first('name')}}</strong>
   </span>
   @enderror

            </div>

            <div class="form-group">
                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="{{old('phone') ?? $user->phone}}" required pattern='^0\d{9}'/>
                @error('phone')
                <span class=" text-red-800" role="alert">
                    <strong>{{ $errors->first('phone')}}</strong>
                </span>
                @enderror
            </div>
         

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" 
                name="email" 
                placeholder="Your Email *" 

                value="{{ $user->email}}"

          
                 required />
                @error('email')
                <span class=" text-red-800" role="alert">
                    <strong>{{ $errors->first('email')}}</strong>
                </span>
                @enderror
            </div>





            <input type="hidden" name="user_type"  value="client"/>
      
        </div>
    </div>

      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</form>

					<a href="{{route('admin.users.destroy',$user->id)}}" ><span class="fa fa-trash text-danger"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection