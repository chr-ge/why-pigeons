<?php

use Illuminate\Database\Seeder;

class CategoryRestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_restaurant')->insert(array(
            array('category_id' => '1', 'restaurant_id' => '1',),
            array('category_id' => '11', 'restaurant_id' => '1'),
            array('category_id' => '14', 'restaurant_id' => '1',),

            array('category_id' => '1', 'restaurant_id' => '2',),
            array('category_id' => '11', 'restaurant_id' => '2',),
            array('category_id' => '14', 'restaurant_id' => '2',),

            array('category_id' => '1', 'restaurant_id' => '3',),
            array('category_id' => '9', 'restaurant_id' => '3',),
            array('category_id' => '10', 'restaurant_id' => '3',),

            array('category_id' => '3', 'restaurant_id' => '4',),
            array('category_id' => '7', 'restaurant_id' => '4',),
            array('category_id' => '16', 'restaurant_id' => '4',),

            array('category_id' => '1', 'restaurant_id' => '5',),
            array('category_id' => '19', 'restaurant_id' => '5',),
            array('category_id' => '6', 'restaurant_id' => '5',),

            array('category_id' => '2', 'restaurant_id' => '6',),
            array('category_id' => '6', 'restaurant_id' => '6',),
            array('category_id' => '12', 'restaurant_id' => '6',),
            array('category_id' => '18', 'restaurant_id' => '6',),

            array('category_id' => '1', 'restaurant_id' => '7',),
            array('category_id' => '11', 'restaurant_id' => '7',),
            array('category_id' => '20', 'restaurant_id' => '7',),

            array('category_id' => '1', 'restaurant_id' => '8',),
            array('category_id' => '11', 'restaurant_id' => '8',),
            array('category_id' => '20', 'restaurant_id' => '8',),
        ));
    }
}
