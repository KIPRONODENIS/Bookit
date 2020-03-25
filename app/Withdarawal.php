<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdarawal extends Model
{
   protected $guarded=[];

   public function hotel() {
   	return $this->belongsTo(\App\Hotel::class,'hotel_id');
   }
}
