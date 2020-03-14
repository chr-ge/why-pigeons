<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street_address', 'city', 'province', 'postal_code','country',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
