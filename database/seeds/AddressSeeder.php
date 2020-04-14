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
        Address::create([
            'account_id' => '9',
            'description' => 'restaurant',
            'street_address' => '537 Rue Ste-Catherine O',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H3B 1B2',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '10',
            'description' => 'restaurant',
            'street_address' => '1249 Rue Metcalfe',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H3B 2V5',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '11',
            'description' => 'restaurant',
            'street_address' => '3131 Boul. De la Cote-Vertu',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H4R 1Y8',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '12',
            'description' => 'restaurant',
            'street_address' => '880 Rue Beaulac',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H4R 2X7',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '13',
            'description' => 'restaurant',
            'street_address' => '665 32e Avenue',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H8T 3G6',
            'country' => 'Canada'
        ]);
        Address::create([
            'account_id' => '14',
            'description' => 'restaurant',
            'street_address' => '2020 Ave Crescent',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postal_code' => 'H3G 2B8',
            'country' => 'Canada'
        ]);
    }
}
