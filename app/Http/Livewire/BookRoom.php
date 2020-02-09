<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Book;
use Carbon\Carbon;
class BookRoom extends Component
{
  public $fromdate;
  public $fromtime;
  public $todate;
  public $totime;
  public $service;
  public $metric;
  public $service_name;
  public $price;
  public $total;

public function mount($service) {

  $this->service=$service->toArray();


  $this->service_name=$service->name;
  $this->price=$service->pivot->price_per_hour;
}
  public function submit(){
    $this->validate([
            'fromdate' => 'required|min:1',
            'fromtime' => 'required|min:1',
            'todate' => 'required|min:1',
            'totime' => 'required|min:1',


        ]);
$from=new Carbon($this->fromdate." ".$this->fromtime);
$to=new Carbon($this->todate." ".$this->totime);

$this->metric=$to->diffInHours($from);
$this->total=$this->metric * $this->price;

//return redirect()->to('/booking-success');
  }
    public function render()
    {
        return view('livewire.book-room');
    }
}
