<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    protected $fillable = [
        'street_address', 'city', 'province', 'postal_code','country',
    ];

    //protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
