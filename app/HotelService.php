<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelService extends Model
{
    protected $table='hotel_service';

    public function ratings() {
    	return $this->hasMany(\App\Rate::class,'service_id');
    }

     public function rated() {
      return $this->ratings()->where('user_id',\Auth::id());
    }
}
