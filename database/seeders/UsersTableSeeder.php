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
            'name' => 'mohammad',
            'email' => 'mohammad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Mm12345@'), 
            'role' => true,
            'image' => null,
            'phone' => '1234567890',
            'city' => 'irbed',
            'street_address' => 'al-hossen',
            'post_code' => 12345,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
