<?php

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list =[
            [
                'id' => 1,
                'lname' => 'Marcos',
                'fname' => 'Bongbong',
                'address' => 'Ilocos',
                'phone' => '09123456789',
                'email' => 'bongbong@gmail.com',
                'password' => bcrypt('bong1234')
            ],
            [
                'id' => 2,
                'lname' => 'Duterte',
                'fname' => 'Digong',
                'address' => 'Davao',
                'phone' => '09123456789',
                'email' => 'duterte@gmail.com',
                'password' => bcrypt('digong1234')
            ],
            [
                'id' => 3,
                'lname' => 'Gadon',
                'fname' => 'Larry',
                'address' => 'Manila',
                'phone' => '09123456789',
                'email' => 'gadong@gmail.com',
                'password' => bcrypt('gadon1234')
            ]
        ];
        foreach($user_list as $user){
            \App\User::create($user);
        }
    }
}
