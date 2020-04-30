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

        RestaurantHours::create(['restaurant_id' => '9', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '9', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '9', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '9', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '9', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '9', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '9', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '10', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '10', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '10', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '10', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '10', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '10', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '10', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);

        RestaurantHours::create(['restaurant_id' => '11', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '11', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '11', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '11', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '11', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '11', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '11', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);

        RestaurantHours::create(['restaurant_id' => '12', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '12', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '12', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '12', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '12', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '12', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '12', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '13', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '13', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '13', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '13', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '13', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '13', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '13', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '14', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '14', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '14', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '14', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '14', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '14', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '14', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '15', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '15', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '15', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '15', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '15', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '15', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '15', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '16', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '16', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '16', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '16', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '16', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '16', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '16', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '17', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '17', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '17', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '17', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '17', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '17', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '17', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '18', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '18', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '18', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '18', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '18', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '18', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '18', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '19', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '19', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '19', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '19', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '19', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '19', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '19', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '20', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '20', 'day' => '2', 'open_time' => null, 'close_time' => null]);
        RestaurantHours::create(['restaurant_id' => '20', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '20', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '20', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '20', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '20', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '21', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '21', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '21', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '21', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '21', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '21', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '21', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '22', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '22', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '22', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '22', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '22', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '22', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '21:00:00']);
        RestaurantHours::create(['restaurant_id' => '22', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '23', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '23', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '23', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '23', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '23', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '23', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '23', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '24', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '24', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '24', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '24', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '24', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '24', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '24', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '25', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '25', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '25', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '25', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '25', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '25', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '25', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '26', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '26', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '26', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '26', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '26', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '26', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '26', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '27', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '27', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '27', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '27', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '27', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '27', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '27', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '28', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '28', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '28', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '28', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '28', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '28', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '28', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '29', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '29', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '29', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '29', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '29', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '29', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '29', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '30', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '30', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '30', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '30', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '30', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '30', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '30', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '31', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '21:00:00']);
        RestaurantHours::create(['restaurant_id' => '31', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '21:00:00']);
        RestaurantHours::create(['restaurant_id' => '31', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '21:00:00']);
        RestaurantHours::create(['restaurant_id' => '31', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '21:00:00']);
        RestaurantHours::create(['restaurant_id' => '31', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '21:00:00']);
        RestaurantHours::create(['restaurant_id' => '31', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '31', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);

        RestaurantHours::create(['restaurant_id' => '32', 'day' => '1', 'open_time' => '16:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '32', 'day' => '2', 'open_time' => '16:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '32', 'day' => '3', 'open_time' => '16:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '32', 'day' => '4', 'open_time' => '16:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '32', 'day' => '5', 'open_time' => '16:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '32', 'day' => '6', 'open_time' => '12:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '32', 'day' => '7', 'open_time' => '12:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '33', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '33', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '33', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '33', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '33', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '33', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '33', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '34', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '34', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '34', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '34', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '34', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '34', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '34', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '35', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '35', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '35', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '35', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '35', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '35', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '35', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '36', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '36', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '36', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '36', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '36', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '36', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '36', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '37', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '37', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '37', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '37', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '37', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '37', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '37', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '38', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '38', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '38', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '38', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '38', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '38', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '38', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '39', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '39', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '39', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '39', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '39', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '39', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '39', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);

        RestaurantHours::create(['restaurant_id' => '40', 'day' => '1', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '40', 'day' => '2', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '40', 'day' => '3', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '40', 'day' => '4', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '40', 'day' => '5', 'open_time' => '09:00:00', 'close_time' => '22:00:00']);
        RestaurantHours::create(['restaurant_id' => '40', 'day' => '6', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
        RestaurantHours::create(['restaurant_id' => '40', 'day' => '7', 'open_time' => '09:00:00', 'close_time' => '23:00:00']);
    }
}
