<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@in2world.com',
            'password' => Hash::make('123456789'),
            'type' => 'super-admin'
        ]);
        User::create([
            'name' => 'Content writer',
            'email' => 'writer@in2world.com',
            'password' => Hash::make('123456789'),
            'type' => 'user'
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@in2world.com',
            'password' => Hash::make('123456789'),
            'type' => 'user'
        ]);
    }
}
