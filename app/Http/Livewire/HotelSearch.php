<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Hotel;
use Alert;
class HotelSearch extends Component
{
  public $query;
  public $hotels;

  public function mount() {
    $this->hotels=Hotel::all()
    ->toArray();
  }

public function reset() {

}
  public function updatedQuery() {
    $this->hotels=Hotel::where('location',$this->query)
    ->get()
    ->toArray();
  }
    public function render()
    {


        return view('livewire.hotel-search');
    }
}
