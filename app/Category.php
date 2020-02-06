<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
class Category extends Model
{
    protected $guarded=[];

    protected $table='categories';

    public function hotels() {
      return $this->belongsToMany(\App\Hotel::class)->withTimestamps();
    }

    public function services() {

      return $this->hasMany(Service::class);
    }
}
