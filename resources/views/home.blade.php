@extends('layouts.app')

@section('body')
<div class="container w-3/4">
  <h1 class="h1 my-3">Step 1:Choose a service to Book</h1>

<div class="d-flex flex-wrap">
  @foreach($services as $item)
  @include('partials.Home.service')
@endforeach
</div>
</div>
@endsection
