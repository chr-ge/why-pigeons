<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'account_id' => '1',
            'description' => 'restaurant',
            'street_address' => '1846 Saint-Catherine St W',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H3H 1M1',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '2',
            'description' => 'restaurant',
            'street_address' => '1320 De l\'Église St',
            'city' => 'Saint-Laurent',
            'province' => 'Quebec',
            'postal_code' => 'H4L 2G7',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '3',
            'description' => 'restaurant',
            'street_address' => '1595 Boulevard Cote-Vertu Ouest',
            'city' => 'Saint-Laurent',
            'province' => 'Quebec',
            'postal_code' => 'H4L 2A1',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '4',
            'description' => 'restaurant',
            'street_address' => '1459 Boulevard Saint-Martin O',
            'city' => 'Laval',
            'province' => 'Quebec',
            'postal_code' => 'H7S 1N1',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '5',
            'description' => 'restaurant',
            'street_address' => '993 Decarie Blvd',
            'city' => 'Saint-Laurent',
            'province' => 'Quebec',
            'postal_code' => 'H4L 3M7',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '6',
            'description' => 'restaurant',
            'street_address' => '3009 Notre-Dame St W',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H4C 1N9',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '7',
            'description' => 'restaurant',
            'street_address' => '5300 Rue Jean-Talon O',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H4P 2T5',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '8',
            'description' => 'restaurant',
            'street_address' => '1618 Lincoln Ave',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H3H 1G9',
            'country' => 'Canada'
        ]);
    }
}
