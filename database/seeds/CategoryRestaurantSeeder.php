<?php

use Illuminate\Database\Seeder;

class CategoryRestaurantSeeder extends Seeder
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
        ));
    }
}
