<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriversLicense extends Model
{
   protected $fillable = [
       'driver_id', 'license_number', 'reference_number', 'dob', 'valid_on', 'expires_on'
   ];

   public function driver(){
       return $this->belongsTo(Driver::class);
   }
}
