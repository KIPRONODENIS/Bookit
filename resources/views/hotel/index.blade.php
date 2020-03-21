@extends('hotel')

@section('contents')

<table class="table mt-10 w-full">
<thead class="bg-red-400">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>price/hour</th>
    <th>Date Created</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
@if($services->count()>0)
@foreach($services as $service)
<tr>
  <td>{{$loop->index+1}}</td>
  <td>{{$service->name}}</td>
  <td>Ksh. {{$service->pivot->price_per_hour}}</td>
  <td>{{$service->pivot->created_at->diffForHumans()}}</td>
  <td class="flex justify-around">
<a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
<a href="#" class="btn btn-danger">Delete</a>

  </td>
</tr>
@endforeach
@else
<tr>
<td colspan="4">You have no Services Yet</td>
</tr>
@endif
</tbody>
</table>
@endsection
