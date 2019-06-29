<?php

use Illuminate\Database\Seeder;


use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'user@gmail.com')->first();

        if(!$user){
        	User::create([

	        	'role' => 'admin',
	            'name' => 'Masud Rana',
	            'email' => 'user@gmail.com',
	            'password' => Hash::make('password')

        	]);
        }
    }
}
