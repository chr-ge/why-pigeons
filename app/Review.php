<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [ 'user_id', 'restaurant_id', 'rating', 'comment' ];
}
