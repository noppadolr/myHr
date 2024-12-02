<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [
               'name'   =>      'Administrator',
               'username'       =>      'admin',
               'email'     =>      'admin@gmail.com',
               'role'       =>  'admin',
               'password'   =>     Hash::make('111'),
               'created_at'  =>    Carbon::now(),
               'email_verified_at'   =>    Carbon::now(),
           ] ,
            [
                'name'   =>      'Manager',
                'username'       =>      'manager',
                'email'     =>      'manager@gmail.com',
                'role'       =>  'manager',
                'password'   =>     Hash::make('111'),
                'created_at'  =>    Carbon::now(),
                'email_verified_at'   =>    Carbon::now(),
            ],
            [
                'name'   =>      'User',
                'username'       =>      'user',
                'email'     =>      'user@gmail.com',
                'role'       =>  'user',
                'password'   =>     Hash::make('111'),
                'created_at'  =>    Carbon::now(),
                'email_verified_at'   =>    Carbon::now(),
            ]
        ]);
    }
}
