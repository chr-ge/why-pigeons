<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use Notifiable;

    protected $guard = 'driver';

    protected $fillable = [ 'name', 'email', 'phone', 'password', 'type', 'profile_picture' ];

    protected $hidden = [ 'password', 'remember_token' ];

    public function drivers_license()
    {
        return $this->hasOne(DriversLicense::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reserved_order()
    {
        return $this->hasMany(Order::class)->where('driver_id', auth()->user()->id)->where('status', 'reserved');
    }
}
