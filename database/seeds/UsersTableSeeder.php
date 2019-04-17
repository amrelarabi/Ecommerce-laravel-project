<?php

use Illuminate\Database\Seeder;
use App\Role\UserRole;

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
            'name' => 'admin',
            'email' => 'admin@ecommerce.com',
            'password' =>  bcrypt('admin'), 
            'roles' => UserRole::ROLE_ADMIN
        ]);
    }
}
