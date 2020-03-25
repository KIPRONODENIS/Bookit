<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Payment;
class Payment extends Model
{
 protected $guarded=[];

 public function order() {
 	return $this->belongsTo(\App\Order::class);
 }

}
