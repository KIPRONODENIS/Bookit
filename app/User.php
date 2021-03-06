<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [ ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hotel() {
      return $this->hasOne(\App\Hotel::class);
    }

    public function orders() {
      return $this->hasMany(\App\Order::class);
    }

   public function messages() {
return Chat::where('sender_id',$this->id)->orWhere('receiver_id',$this->id);
   }


             public function deductions() {
        return $this->hasMany(\App\Revenue::class,'user_id')->sum('amount');
      }

}
