<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Hotel extends Model
{
    protected $guarded=[];

    public function user(){
      return $this->belongsTo(\App\User::class);
    }

    public function categories() {

      return $this->belongsToMany(Category::class)->withTimestamps();
    }


      public function services() {

      return $this->belongsToMany(Service::class)->withPivot(['price_per_hour','image'])->withTimestamps();
      }

      public function orders() {
        return $this->hasMany(\App\Order::class,'hotel_id');
      }

}
