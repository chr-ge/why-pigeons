<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $touches = ['order'];
    protected $with = ['order'];

    protected $fillable = ['order_id', 'status'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getColor()
    {
        if($this->status === 'failed' || $this->status === 'cancelled'){
            return 'badge-danger';
        }
        else if($this->status === 'refunded'){
            return 'badge-warning';
        }
        return 'badge-success';
    }
}
