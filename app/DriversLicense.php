<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriversLicense extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        DriversLicense::creating(function ($model) {
            $model->setId();
        });
    }

    public function setId()
    {
        $this->attributes['id'] = \Str::uuid();
    }

   protected $fillable = [ 'driver_id', 'license_number', 'reference_number', 'dob', 'valid_on', 'expires_on' ];

   public function driver()
   {
       return $this->belongsTo(Driver::class);
   }
}
