<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $guarded=[];

    public function hotels() {
      return $this->belongsToMany(\App\Hotel::class)->withPivot(['price_per_hour','image'])->withTimestamps();
    }

    public function categories() {
      return $this->belongsTo(\App\Category::class);
    }

    public function orders(){
    	return $this->hasMany(\App\Order::class);
    }
}
