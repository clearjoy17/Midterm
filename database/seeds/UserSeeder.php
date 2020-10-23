<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'lname'=> 'Mercadejas',
            'fname'=> 'Kajik',
            'address'=> 'Costa Leona, Cagayan de Oro City',
            'phone'=>'0978.675.4231',
            'email'=>'kajikm@gmail.com',
            'password'=> bcrypt('password123')
        ],

        [
            'lname'=> 'Mercadejas',
            'fname'=> 'Zamiel',
            'address'=> 'Costa Leona, Cagayan de Oro City',
            'phone'=>'0997.234.5632',
            'email'=>'zamiel@gmail.com',
            'password'=> bcrypt('password123') 
        ],

        [
            'lname'=> 'Mercadejas',
            'fname'=> 'Ali',
            'address'=> 'Costa Leona, Cagayan de Oro City',
            'phone'=>'0932.562.1234',
            'email'=>'alimerc@gmail.com',
            'password'=> bcrypt('password123')
        ],
        ];
        foreach($data as $user){
            \App\User::create($user);   
        }
    }
}
