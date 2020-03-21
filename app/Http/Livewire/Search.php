<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use App\Hotel;
use App\Service;
class Search extends Component
{


  public $searchTerm;
  public $hotels;
  public $services;


  public function mount() {
  $this->hotels=[]; 
  $this->services=[]; 

   // $searchTerm='%'.$this->searchTerm.'%';

   //     $this->hotels=User::where('name','like',$searchTerm)->get()->toArray(); 

}

  public function updated() {
  if(!$this->searchTerm=='') {
  	
  	 $searchTerm='%'.$this->searchTerm.'%';

       $this->hotels=Hotel::where('hotel_name','like',$searchTerm)->get()->take(6)->toArray();
       $this->services=Service::where('name','like',$searchTerm)->get()->take(6)->toArray();

  }else {

  	  $this->hotels=[];
  	  $this->services=[];
  }
   

}
    public function render()
    {

   

        return view('livewire.search');
    }
}
