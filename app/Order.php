<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'restaurant_id', 'driver_id', 'total_items_qty', 'billing_subtotal', 'billing_delivery', 'billing_tax', 'driver_tip', 'billing_total', 'status', 'stripe_id', 'error'
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
        return $this->hasOne(Address::class, 'account_id');
    }

    public function isBlocked(){
        if($this->status === 'failed' || $this->status === 'cancelled' || $this->status === 'refunded'){
            return true;
        }
        return false;
    }

    public function getStatus(){
        if($this->status === 'failed' || $this->status === 'cancelled'){
            return 'badge-danger';
        }
        else if($this->status === 'refunded'){
            return 'badge-warning';
        }
        else{
            return 'badge-success';
        }
    }

    public function scopeGetAvailableOrders($query){
        return $query->where('status', 'ready_for_pickup')->latest();
    }

    public function scopeGetDriverReserved($query){
        return $query->where('driver_id', auth()->user()->id)->where('status', 'reserved')->latest();
    }
}
