<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Payment;
class PayOrder extends Component
{
  public $order_id;
  public $phone;
  public function mount($order) {

   $this->order_id=$order->id;
  }


  public function submit() {
    $this->validate([
            'phone' => 'required|min:10',
            ]);

    $payment=Payment::create([
      'order_id'=>$this->order_id,
      'confirmation'=>"ABCD",
      'phone'=>$this->phone
    ]);

    $this->redirect('/payed');
  }

    public function render()
    {
        return view('livewire.pay-order');
    }
}
