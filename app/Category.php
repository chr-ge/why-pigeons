<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function scopeNoPriceRange($query){
        return $query->pluck('id', 'name')->except('$', '$$', '$$$');
    }

    public function restaurants(){
        return $this->belongsToMany(Restaurant::class);
    }
}
