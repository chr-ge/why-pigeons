<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'total_items_qty', 'billing_subtotal', 'billing_delivery', 'billing_tax', 'billing_total', 'status', 'error'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function menu_items()
    {
        return $this->belongsToMany(Menu::class);
    }
}
