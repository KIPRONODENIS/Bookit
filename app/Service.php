<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hotel;
class Service extends Model
{
    protected $guarded=[];

    public function hotels() {
      return $this->belongsToMany(Hotel::class)->withTimestamps();
    }
}
