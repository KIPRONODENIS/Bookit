<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $guarded=[];

    public function sender() {
    	return $this->belongsTo(\App\User::class,'sender_id');
    }

        public function senderH() {
    	return $this->belongsTo(\App\Hotel::class,'sender_id');
    }
}
