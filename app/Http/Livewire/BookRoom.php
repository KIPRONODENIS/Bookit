<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Book;
class BookRoom extends Component
{
  public $room_type;
  public $room_number;
  public $person_number;
  public $child_number;
  public $res_facilities;

  public function submit(){
    $this->validate([
            'room_type' => 'required|min:1',
            'room_number' => 'required|min:1',
            'person_number' => 'required|min:1',
            'child_number' => 'required|min:1',
            'res_facilities' => 'required',

        ]);

        //after validation you can save it

     $order=Book::create([
       'room_type' => $this->room_type,
       'room_number' => $this->room_number,
       'person_number' => $this->person_number,
       'child_number' => $this->child_number,
       'res_facilities' => $this->res_facilities


     ]);

return redirect()->to('/booking-success');
  }
    public function render()
    {
        return view('livewire.book-room');
    }
}
