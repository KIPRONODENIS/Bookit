<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $guarded=[];

    public function hotels() {
      return $this->belongsToMany(\App\Hotel::class)->withPivot(['price_per_hour'])->withTimestamps();
    }

    public function categories() {
      return $this->belongsTo(\App\Category::class);
    }
}
