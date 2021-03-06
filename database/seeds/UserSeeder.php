<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash; 


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'test@gmail.com';
        $user->password = Hash::make('test123');
        $user->mobilephone = 123456789;
        $user->homephone = 123456789;
        $user->address = '123123';
        $user->save();

        $user = new User();
        $user->name = 'Agent';
        $user->email = 'agent@gmail.com';
        $user->password = Hash::make('test123');
        $user->mobilephone = 123456789;
        $user->homephone = 123456789;
        $user->address = '123123';
        $user->save();
    }
}
