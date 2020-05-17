<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;

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

    public static function getAvgColor($avg){
        $avg = (double)$avg;
        if($avg >= 4 && $avg <= 5)
            return "badge badge-success";
        else if($avg >= 2 && $avg < 4) {
            return "badge badge-warning";
        }
        else {
            return "badge badge-danger";
        }
    }
}
