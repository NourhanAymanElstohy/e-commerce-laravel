<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buyer= User::create(
            [
                "name"=>"buyer",
                "email"=>"buyer@gmail.com",
                'password' => bcrypt('123456'),
                'role' => '2',
            ]
        );
        
        $buyer->assignRole('buyer'); 

        $seller= User::create(
            [
                "name"=>"seller",
                "email"=>"seller@gmail.com",
                'password' => bcrypt('123456'),
                'role' => '3',
            ]
        );
        
        $seller->assignRole('seller');


        $admin= User::create(
            [
                "name"=>"admin",
                "email"=>"admin@gmail.com",
                'password' => bcrypt('123456'),
                'role' => '1',
            ]
        );

        $admin->assignRole('super-admin');

    }
}
