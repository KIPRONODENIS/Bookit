<div class="mx-4 px-2">
    {{-- The Master doesn't talk, he acts. --}}

              <h1 class="text-4xl border-red-100 border-t-none text-center text-teal-500 w-full">Messages</h1>

          <div class="card bg-green-100 h-50 " style="height:300px !important; overflow-y:scroll">
           @if(count($messages)>0)
           @foreach($messages as $message)
           <div class="mx-2 p-2 card my-2">
           	<h1 class="font-bold text-green-400">
              @php

             $user=\App\User::find($message['sender_id'])->name ?? \App\Hotel::find($message['sender_id'])->hotel_name;
          
               @endphp
               @if($type=='hotel')
              {{Auth::user()->id==$message['sender_id']? "Me":Auth::user()->hotel->id==$message['sender_id']?"me": $user}}
              @else
              {{Auth::user()->id==$message['sender_id']? "Me": $user}} 

@endif
            </h1>
           <p class="text-sm">{{$message['message']}}</p>
           <h4 class="text-xs m-2 font-bold text-muted">{{$message['created_at']}}</h4>
       </div>
           @endforeach
            @else
            <div class="alert alert-info">No messages Yet</div>
           @endif
          </div>
          <div class="flex my-2">
          <textarea name="chat" wire:model.lazy="chat" class="form-control w-3/4"></textarea>
          <button class="btn btn-success h-10 m-3" wire:click="send">send</button>
        </div>
</div>
