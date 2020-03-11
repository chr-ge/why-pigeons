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
    protected $fillable = [
        'description', 'street_address', 'city', 'province', 'country',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
