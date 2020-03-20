<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Restaurant extends Authenticatable
{
    //Restaurant model
    use Notifiable;

    //protected $guard = 'restaurant';

    protected  $fillable = [
        'name', 'email', 'phone', 'password', 'category_id', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
