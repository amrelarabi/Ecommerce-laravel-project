<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'amrelarabi',
            'email' => 'amr.elarabi.egy@gmail.com',
            'password' =>  bcrypt('amrelarabi')
        ]);
    }
}
