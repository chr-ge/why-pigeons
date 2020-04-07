<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pigeon extends Authenticatable
{
    //Admin model
    use Notifiable;

    protected $guard = 'pigeon';

    protected $fillable = [
        'name', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getPercentatgeChange($oldValue, $newValue){
        $decreasedValue = $newValue - $oldValue;
        return ($decreasedValue / $oldValue) * 100;
    }
}
