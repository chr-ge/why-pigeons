<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;

    protected  $fillable = [
        'restaurant_id', 'name', 'description', 'image', 'category', 'price',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
