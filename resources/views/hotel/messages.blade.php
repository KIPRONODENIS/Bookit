@extends('hotel')

@section('contents')
<div class="row">
  <div class="col-1"></div>
  <div class="col-3 pt-5">
    <h1 class="h3">Users</h1>
    @if($chats->count()>0)
    <ul class="list-group shadow text-center ">
      @foreach($chats as $chat)
      <li class="list-group-item hover:bg-green-200 focus:bg-blue-400"><a href="{{route('hotel.messages',$chat->sender->id ?? '')}}">{{$chat->sender->name}}</a><span class="badge badge-danger">{{$chat->total}}</span></li>
      @endforeach
    </ul>
    @else
<div class="alert alert-success">No chats Yet</div>
    @endif
  </div>
  <div class="col-8">
    @livewire('message',$id,'hotel')
  </div>
</div>
@endsection
