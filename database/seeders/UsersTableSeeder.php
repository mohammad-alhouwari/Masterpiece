<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Aa12345@'), 
            'role' => true,
            'sub_role' => 0,
            'image' => "seed\admin\admin1.png",
            'phone' => '0700000001',
            'city' => 'irbed',
            'street_address' => 'al-hossen',
            'post_code' => 12345,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Aa12345@'), 
            'role' => true,
            'sub_role' => 1,
            'image' => null,
            'phone' => '0700000002',
            'city' => 'amman',
            'street_address' => 'king street',
            'post_code' => 54321,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin3',
            'email' => 'admin3@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Aa12345@'), 
            'role' => true,
            'sub_role' => 2,
            'image' => null,
            'phone' => '0700000003',
            'city' => 'zarqa',
            'street_address' => 'hello street',
            'post_code' => 55555,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
