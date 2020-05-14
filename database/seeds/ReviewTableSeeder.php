<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Restaurant::all() as $restaurant)
            factory(App\Review::class, 10)->create();
    }
}
