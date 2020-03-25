<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Book;
use Carbon\Carbon;
use App\Order;
use App\Revenue;
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
  public $submit="false";
  public $hotel;
  public $charge=150;
public function mount($service,$hotel) {

  $this->service=$service->toArray();
  $this->hotel=$hotel->toArray();

  $this->service_name=$service->name;
  $this->price=$service->pivot->price_per_hour;
}


public function total() {
  $from=new Carbon($this->fromdate." ".$this->fromtime);
  $to=new Carbon($this->todate." ".$this->totime);

  $this->metric=$to->diffInHours($from);
  return $this->total=$this->metric * $this->price;
}
  public function submit(){
    $this->validate([
            'fromdate' => 'required|min:1',
        
            'todate' => 'required|min:1',



        ]);
        $this->submit="true";

//create a new order
$order=Order::Create([
'user_id'=>\Auth::id(),
  'service_id'=>$this->service['id'],
'hotel_id'=>$this->hotel['id'],
'total'=>$this->total,
'from'=>new Carbon($this->fromdate." ".$this->fromtime),
'to'=>new Carbon($this->todate." ".$this->totime)

]);

$revenue=Revenue::create([
            'user_id'=>\Auth::id(),
            'amount'=>$this->charge,
            'description'=>'commission fee'
        ]);

session()->put('order',$order);
return redirect()->to('/booking-success');
  }
    public function render()
    {
        return view('livewire.book-room');
    }
}
