@extends('layouts.app')

@section('body')
<h1 class="h1 my-3">Step 2:Choose a Hotel</h1>
<div class=" flex flex-wrap px-6 ">
@if(count($hotels)>0)
  @foreach($hotels as $hotel)
@include('partials.Home.selectcard')
  @endforeach
  @endif

</div>
@endsection
