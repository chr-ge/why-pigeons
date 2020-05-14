<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['driver_id', 'car_model', 'license_plate', 'year', 'color'];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
