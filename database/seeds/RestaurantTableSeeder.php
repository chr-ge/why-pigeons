<?php

use App\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'name' => 'Pizza Pizza',
            'email' => 'mark@pizzapizza.com',
            'phone' => '5146549879',
            'password' => '$2y$10$y5kqAI6HM3gLqcWdLVxscOfah1tj8liaBeAF6xcCTb8aJ0ornMvK2',
            'category_id' => 14,
            'image' => 'uploads/k0w0zyVQ8wWcGp7KkplGQkrnTY4sgp9bNA3SIRSb.png',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Pizza Hut',
            'email' => 'hut@pizzahut.com',
            'phone' => '5149889879',
            'password' => '$2y$10$zHxgRSJJufRX3KhIvqZ7ouWiKPVoaxSMWQYP15a6468yCA1tZtXXG',
            'category_id' => 14,
            'image' => 'uploads/m6h1UxxDsqGZlqq6mSgf6ivgMhWU52gR0iX9R1QS.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'KFC',
            'email' => 'kfc@gmail.com',
            'phone' => '5146549877',
            'password' => '$2y$10$fNlc/pFipndZ2mNpIKtd5e9GMeqCUzMD6QH7DiyrLDBF6IVkvq116',
            'category_id' => 9,
            'image' => 'uploads/4Pz9iVZMACVKBNf5OrANsPkCBajd4nagGz5CnDhD.jpeg',
            'active' => 1
        ]);
    }
}
