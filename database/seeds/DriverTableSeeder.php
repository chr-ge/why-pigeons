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
            'password' => '$2y$10$4ZCcTAD9BT0fFjMhJRBSm.Vwpix2akPAdiVe5fNOCnvuCOw.bosxi' // 5146949879
        ]);

        factory(Driver::class, 29)->create();
    }
}
