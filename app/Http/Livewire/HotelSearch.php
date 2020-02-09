<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Hotel;
use Alert;
use App\Service;
use App\Category;
class HotelSearch extends Component
{


  public function mount() {


    }

    public function render()
    {

        return view('livewire.hotel-search');
    }
}
