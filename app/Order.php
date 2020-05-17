<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'restaurant_id', 'driver_id', 'total_items_qty', 'billing_subtotal', 'billing_delivery', 'billing_tax', 'driver_tip', 'billing_total', 'stripe_id', 'error'
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
        return $this->belongsToMany(Menu::class, 'order_menu')->withPivot('quantity', 'special');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'account_id')->where('description', 'delivery');
    }

    public function status()
    {
        return $this->hasMany(OrderStatus::class)->latest();
    }

    public function fullAddress()
    {
        return $this->address->street_address.', '.$this->address->city.' '.
            $this->address->province.', '.$this->address->postal_code;
    }

    public function isBlocked()
    {
        if($this->status->first()->status === 'failed' || $this->status->first()->status === 'cancelled' || $this->status->first()->status === 'refunded'){
            return true;
        }
        return false;
    }

    public function scopeGetAvailableOrders($query)
    {
        return $query->whereNull('driver_id')->whereHas('status', function ($q) {
            $q->where('status', 'food_ready_for_pickup');
        })->latest();
    }

    public function scopeGetDriverReserved($query)
    {
        return $query->where('driver_id', auth()->user()->id)->whereDoesntHave('status', function ($q) {
            $q->where('status', 'delivered');
        })->latest();
    }

    public function scopeGetDriverCompletedOrders($query)
    {
        return $query->where('driver_id', auth()->user()->id)->whereHas('status', function ($q) {
            $q->where('status', 'delivered');
        })->latest();
    }
}
