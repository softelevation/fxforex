<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            'name' => 'admin',
            'second_name' => 'log',
            'email' => 'admin@gmail.com',
            'phone'=> '1234567895',
            'password' => Hash::make('admin@123'),
            'role' => 'admin'
        ]);
    }
}
