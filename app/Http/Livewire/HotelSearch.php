<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Hotel;
use Alert;
use App\Service;
class HotelSearch extends Component
{
use WithPagination;
 public $query;
  public $hotels;
  public $service;

  public function mount() {
    $this->service=session('service_id');

    // $this->hotels=Service::find($this->service)->hotels
    // ->toArray();
  }

public function bookthis($id) {
 return redirect()->to('/book/'.$id.'/form');
}

  public function updatesQuery() {
  return  $this->hotels=Service::find($this->service)->hotels()
    ->where('location','=',$this->query)
    ->get()
    ->toArray();

  }
    public function render()
    {
      $this->hotels=Service::find($this->service)->hotels()
      ->where('location','=',$this->query)
      ->get()
      ->toArray();

        return view('livewire.hotel-search',['hotels'=>$this->hotels]);
    }
}
