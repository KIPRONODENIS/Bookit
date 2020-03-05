@extends('layouts.app')
@section('body')
<div class="container w-3/4 mx-auto p-3 shadow my-5">
  <div class=" w-full mt-4 p-3">
Your Name: <strong class="inline">{{Auth::user()->name}}</strong>
<a class="float-right btn btn-primary text-white">Update</a>
  </div>
<div class="card my-2"></div>
<div class="h-10"></div>
<div class=" w-full mt-4 p-3">
Your Email: <strong class="inline">{{Auth::user()->email}}</strong>
<a class="float-right btn btn-primary text-white">Update</a>
</div>
<div class="card my-2"></div>


<div class="card my-2"></div>
<div class="h-10"></div>
<div class=" w-full mt-4 p-3">
Your image: <strong class="inline">{{Auth::user()->image ??"No image"}}</strong>
<a class="float-right btn btn-primary text-white">Update</a>
</div>
<div class="card my-2"></div>
</div>
@endsection
