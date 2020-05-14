<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [ 'user_id', 'restaurant_id', 'rating', 'comment' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function getColor(){
        if($this->rating === 4 || $this->rating === 5)
            return "badge badge-success";
        else if($this->rating === 2 || $this->rating === 3) {
            return "badge badge-warning";
        }
        else {
            return "badge badge-danger";
        }
    }
}
