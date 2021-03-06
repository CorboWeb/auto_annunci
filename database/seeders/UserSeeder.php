<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
            'name' => 'ornellone',
            'email' => 'ornello@gcoc.com',
            'password' => Hash::make('123456789'),
            'created_at' => Carbon::now(),
            'role_id' => 1,
        ]);

        
        DB::table('users')->insert([
            'name' => 'riccardo',
            'email' => 'riccardo@gcoc.com',
            'password' => Hash::make('123456789'),
            'created_at' => Carbon::now(),
            'role_id' => 2,

        ]);
    }
}
