
@extends('layouts.app')
@section('body')
<div class="container w-3/4">
  <div class="bg-white row flex  my-3 justify-between shadow">
<img class="image-responsive shadow" height="150" width="200" src="{{asset('storage/'.Auth::user()->hotel->image)}}">
<div class="card w-1/2 bg-gray- p-3">
<h1 class="h3" style="color:#fc4a1a">{{Auth::user()->hotel->hotel_name}}</h1>

<p class="h4 text-green-500 my-2">{{Auth::user()->hotel->services->count()}} Service(s) </p>
<div class="flex justify-between">
<a class="text-white btn btn-primary mt-5 ">Edit</a>
<a class="text-white btn btn-success mt-5 font-bold text-md ">Add New Service</a>
</div>
</div>
  </div>


      <table class="table mt-10 w-full">
    	<thead class="bg-red-400">
    		<tr>
    			<th>#</th>
    			<th>Name</th>
    			<th>Date Created</th>
          <th>Action</th>
    		</tr>
    	</thead>
  <tbody>
    	<tr>
        <th>#</th>
        <th>Name</th>
        <th>Date Created</th>
        <th>Action</th>
    	</tr>

   </tbody>
    </table>
</div>
@endsection
