<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Order extends Model
{
    protected $guarded=[];


    public function hotel() {
      return $this->belongsTo(\App\Hotel::class);
    }

    public function user() {
      return $this->belongsTo(\App\User::class);
    }

    public function service() {
      return $this->belongsTo(\App\Service::class);
    }

    public function scopeDuration() {
      $to=new Carbon($this->to);
     $from=new Carbon($this->from);
      $diff= $to->diffInHours($from);
      if($diff>24) {
        return  $to->diffInDays($from)."Day(s)";
      }

      return $diff ." Hr(s)";

    }
}
