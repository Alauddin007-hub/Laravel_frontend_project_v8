<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Masum", //Str::random(10),
            'email' => "masum@gmail.com", //Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name' => "Ikbal", //Str::random(10),
            'email' => "ikbal@gmail.com", //Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => "Mizhanur Rahman", //Str::random(10),
            'email' => "Mizan@gmail.com", //Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'role' => '3',
        ]);
    }
}
