<?php

use App\RestaurantHours;
use Illuminate\Database\Seeder;

class RestaurantHoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RestaurantHours::create(['restaurant_id' => '1', 'day' => '1', 'open_time' => null, 'close_time' => null]);
        RestaurantHours::create(['restaurant_id' => '1', 'day' => '2', 'open_time' => null, 'close_time' => null]);
        RestaurantHours::create(['restaurant_id' => '1', 'day' => '3', 'open_time' => '11:30:00', 'close_time' => '19:45:00']);
        RestaurantHours::create(['restaurant_id' => '1', 'day' => '4', 'open_time' => '11:30:00', 'close_time' => '19:45:00']);
        RestaurantHours::create(['restaurant_id' => '1', 'day' => '5', 'open_time' => '11:30:00', 'close_time' => '19:45:00']);
        RestaurantHours::create(['restaurant_id' => '1', 'day' => '6', 'open_time' => '11:30:00', 'close_time' => '19:45:00']);
        RestaurantHours::create(['restaurant_id' => '1', 'day' => '7', 'open_time' => '11:30:00', 'close_time' => '19:45:00']);

        RestaurantHours::create(['restaurant_id' => '2', 'day' => '1', 'open_time' => null, 'close_time' => null]);
        RestaurantHours::create(['restaurant_id' => '2', 'day' => '2', 'open_time' => '10:30:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '2', 'day' => '3', 'open_time' => '10:30:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '2', 'day' => '4', 'open_time' => '10:30:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '2', 'day' => '5', 'open_time' => '10:30:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '2', 'day' => '6', 'open_time' => '10:30:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '2', 'day' => '7', 'open_time' => '10:30:00', 'close_time' => '18:30:00']);

        RestaurantHours::create(['restaurant_id' => '3', 'day' => '1', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '3', 'day' => '2', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '3', 'day' => '3', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '3', 'day' => '4', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '3', 'day' => '5', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '3', 'day' => '6', 'open_time' => '10:00:00', 'close_time' => '16:30:00']);
        RestaurantHours::create(['restaurant_id' => '3', 'day' => '7', 'open_time' => '10:00:00', 'close_time' => '16:30:00']);

        RestaurantHours::create(['restaurant_id' => '4', 'day' => '1', 'open_time' => '11:00:00', 'close_time' => '21:30:00']);
        RestaurantHours::create(['restaurant_id' => '4', 'day' => '2', 'open_time' => '11:00:00', 'close_time' => '21:30:00']);
        RestaurantHours::create(['restaurant_id' => '4', 'day' => '3', 'open_time' => '11:00:00', 'close_time' => '21:30:00']);
        RestaurantHours::create(['restaurant_id' => '4', 'day' => '4', 'open_time' => '11:00:00', 'close_time' => '21:30:00']);
        RestaurantHours::create(['restaurant_id' => '4', 'day' => '5', 'open_time' => '11:00:00', 'close_time' => '21:30:00']);
        RestaurantHours::create(['restaurant_id' => '4', 'day' => '6', 'open_time' => '11:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '4', 'day' => '7', 'open_time' => '11:00:00', 'close_time' => '22:00:00']);

        RestaurantHours::create(['restaurant_id' => '5', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '5', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '5', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '5', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '5', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '5', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '18:00:00']);
        RestaurantHours::create(['restaurant_id' => '5', 'day' => '7', 'open_time' => null, 'close_time' => null]);

        RestaurantHours::create(['restaurant_id' => '6', 'day' => '1', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '6', 'day' => '2', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '6', 'day' => '3', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '6', 'day' => '4', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '6', 'day' => '5', 'open_time' => '10:00:00', 'close_time' => '18:30:00']);
        RestaurantHours::create(['restaurant_id' => '6', 'day' => '6', 'open_time' => '11:00:00', 'close_time' => '17:00:00']);
        RestaurantHours::create(['restaurant_id' => '6', 'day' => '7', 'open_time' => '11:00:00', 'close_time' => '17:00:00']);

        RestaurantHours::create(['restaurant_id' => '7', 'day' => '1', 'open_time' => '09:30:00', 'close_time' => '22:30:00']);
        RestaurantHours::create(['restaurant_id' => '7', 'day' => '2', 'open_time' => '09:30:00', 'close_time' => '22:30:00']);
        RestaurantHours::create(['restaurant_id' => '7', 'day' => '3', 'open_time' => '09:30:00', 'close_time' => '22:30:00']);
        RestaurantHours::create(['restaurant_id' => '7', 'day' => '4', 'open_time' => '09:30:00', 'close_time' => '22:30:00']);
        RestaurantHours::create(['restaurant_id' => '7', 'day' => '5', 'open_time' => '09:30:00', 'close_time' => '22:30:00']);
        RestaurantHours::create(['restaurant_id' => '7', 'day' => '6', 'open_time' => '09:30:00', 'close_time' => '22:30:00']);
        RestaurantHours::create(['restaurant_id' => '7', 'day' => '7', 'open_time' => '09:30:00', 'close_time' => '22:30:00']);

        RestaurantHours::create(['restaurant_id' => '8', 'day' => '1', 'open_time' => '10:30:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '8', 'day' => '2', 'open_time' => '10:30:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '8', 'day' => '3', 'open_time' => '10:30:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '8', 'day' => '4', 'open_time' => '10:30:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '8', 'day' => '5', 'open_time' => '10:30:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '8', 'day' => '6', 'open_time' => '10:30:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '8', 'day' => '7', 'open_time' => '10:30:00', 'close_time' => '22:00:00']);
    }
}
