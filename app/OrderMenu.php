<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMenu extends Model
{
    protected $table = 'order_menu';

    protected $fillable = ['order_id', 'menu_id', 'quantity'];
}
