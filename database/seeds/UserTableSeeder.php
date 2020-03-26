<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Ace Ventura',
            'email' => 'ace@gmail.com',
            'phone' => '5146549879',
            'email_verified_at' => now(),
            'password' => '$2y$10$dk1vpLlpVevaJK.B4C7qGePtKco5VbuoKLao3YDRnRTMaThbSoFRK' // aceaceace
        ]);

        factory(App\User::class, 29)->create();
    }
}
