<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\User;
use App\Chat;
class Message extends Component
{
	public $messages;
	public $hotel;
	public $chat;
	public $type;
	public function mount($id,$type="user") {
   $this->hotel=$id;
   $this->type=$type;
		if($type=='hotel') {
$this->messages= Chat::whereRaw('(sender_id='.$this->hotel.' AND receiver_id='.Auth::user()->hotel->id.') or (sender_id='.Auth::user()->hotel->id.' and receiver_id='.$this->hotel.')')->get()->toArray();

Chat::whereRaw('(sender_id='.$this->hotel.' AND receiver_id='.Auth::user()->hotel->id.') or (sender_id='.Auth::user()->hotel->id.' and receiver_id='.$this->hotel.')')->get()->each(function($chat){
	$chat->read=true;
    $chat->save();
});
		}else {
		

		$this->messages= Chat::whereRaw('(sender_id='.$this->hotel.' AND receiver_id='.Auth::id().') or (sender_id='.Auth::id().' and receiver_id='.$this->hotel.')')->get()->toArray();

  Chat::whereRaw('(sender_id='.$this->hotel.' AND receiver_id='.Auth::id().') or (sender_id='.Auth::id().' and receiver_id='.$this->hotel.')')->get()->each(function($chat){
	$chat->read=true;
    $chat->save();
});

		}
	}

	public function send() {
		if(!$this->chat=='' && $this->hotel !=0) {
//create a chat 
       $chat= Chat::create([
   'sender_id'=>$this->type=='hotel'? Auth::user()->hotel->id:Auth::id(),
   'receiver_id'=>$this->hotel,
   'message'=>$this->chat
        ]);
 
//and push it to an array
    array_push($this->messages, $chat->toArray());
$this->chat="";
		}
	}
    public function render()
    {
        return view('livewire.message');
    }
}
