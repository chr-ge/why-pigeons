<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;

    protected  $fillable = [ 'restaurant_id', 'name', 'description', 'image', 'category_id', 'price' ];

    public function getPrice()
    {
        return $this->available ? '$'.$this->price : 'Not Available';
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeNewMenuItemsThisMonth($query, $id){
        return $query->where('restaurant_id', $id)->whereYear('added_on', Carbon::now())
            ->whereMonth('added_on', Carbon::now())->count();
    }

    public function scopeNewMenuItemsLastMonth($query, $id)
    {
        return $query->where('restaurant_id', $id)->whereYear('added_on', Carbon::now())
            ->whereMonth('added_on', Carbon::now()->subMonth(1))->count();
    }
}
