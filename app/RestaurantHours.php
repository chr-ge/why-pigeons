<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class RestaurantHours extends Model
{
    public $timestamps = false;

    protected $fillable = ['restaurant_id', 'day', 'open_time', 'close_time'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public static function dayFromNumber($day)
    {
        $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
        return $days[$day-1];
    }

    public static function today(){
        $today = Carbon::today()->dayOfWeek;
        if($today === 0) $today = 7;
        return $today;
    }

    public static function hoursExist($id = null){
        if($id === null){
            return RestaurantHours::where('restaurant_id', auth()->user()->id)->exists();
        }
        return RestaurantHours::where('restaurant_id', $id)->exists();
    }

    public static function setStatus($day)
    {
        if (isset(RestaurantHours::where('restaurant_id', auth()->user()->id)->where('day', $day)->first()->open_time) &&
            isset(RestaurantHours::where('restaurant_id', auth()->user()->id)->where('day', $day)->first()->close_time)) {
            return '<i class="float-right text-green">Open</i>';
        } else {
            return '<i class="float-right text-red">Closed</i>';
        }
    }

    public static function getOpenTime($day)
    {
        $time = RestaurantHours::where('restaurant_id', auth()->user()->id)->where('day', $day)->first()->open_time;
        if(!empty($time)){
            $time = date_format(date_create($time), 'H:i');
        }
        return $time;
    }

    public static function getCloseTime($day)
    {
        $time = RestaurantHours::where('restaurant_id', auth()->user()->id)->where('day', $day)->first()->close_time;
        if(!empty($time)){
            $time = date_format(date_create($time), 'H:i');
        }
        return $time;
    }

    public static function displayHours($restaurant, $day = null){
        $day === null
            ?  $query = RestaurantHours::where('restaurant_id', $restaurant)->where('day', RestaurantHours::today())->first()
            :  $query = RestaurantHours::where('restaurant_id', $restaurant)->where('day', $day)->first();

        $open = $query->open_time;
        $close = $query->close_time;

        if(! isset($query->open_time) && !isset($query->close_time)){
            return 'Closed';
        }
        return Carbon::parse($open)->format('g:i A') . ' - ' .  Carbon::parse($close)->format('g:i A');
    }

    public static function displayHoursLeft($restaurant){
        //$open = RestaurantHours::where('restaurant_id', $restaurant)->where('day', RestaurantHours::today())->first()->open_time;
        $close = RestaurantHours::where('restaurant_id', $restaurant)->where('day', RestaurantHours::today())->first()->close_time;

        return 'Closes in: '.Carbon::parse($close)->longAbsoluteDiffForHumans(Carbon::now(-4));
    }
}
