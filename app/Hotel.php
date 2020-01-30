<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
class Hotel extends Model
{
    protected $guarded=[];

    public function user(){
      return $this->belongsTo(\App\Hotel::class);
    }

    public function services() {

      return $this->belongsToMany(Service::class)->withTimestamps();
    }
}
