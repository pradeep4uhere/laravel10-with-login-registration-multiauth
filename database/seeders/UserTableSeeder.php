<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=> 'Admin User',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'mobile'=> '9015446567',
                'password'=> Hash::make('password'),
                'role'=>'admin',
                'status'=>'active'
            ],
            [
                'name'=> 'Agent User',
                'username' => 'agent',
                'mobile'=> '9015446568',
                'email' => 'agent@gmail.com',
                'password'=> Hash::make('password'),
                'role'=>'agent',
                'status'=>'active'
            ],
            [
                'name'=> 'User',
                'username' => 'user',
                'mobile'=> '9015446569',
                'email' => 'user@gmail.com',
                'password'=> Hash::make('password'),
                'role'=>'user',
                'status'=>'active'
            ]
        ]);
    }
}