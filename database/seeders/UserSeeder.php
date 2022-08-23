<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            [
                [
                    'name'=>'admin',
                    'email'=>'admin@admin.com',
                    'password'=> Hash::make('testtest'),
                    'role'=>'admin'
                ],
                [
                    'name'=>'attendant',
                    'email'=>'attendant@attendant.com',
                    'password'=>Hash::make("testtest"),
                    'role'=>'attendant'
                ],
                [
                    'name'=>'user(guest)',
                    'email'=>'user(guest)@.com',
                    'password'=>Hash::make("testtest"),
                    'role'=>'user(guest)'
                ]
            ]
        );
    }
}
