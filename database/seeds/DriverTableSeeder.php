<?php

use App\Driver;
use Illuminate\Database\Seeder;

class DriverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::create([
            'name' => 'Kevin Malone',
            'email' => 'malone@gmail.com',
            'phone' => '5146949879',
            'password' => '$2y$10$n81cgflXTqguYf1s6g.n2eWiJYj4nE6M5TixCjfljlqM0oBDci5Ki' // password
        ]);

        factory(Driver::class, 29)->create();
    }
}
