<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([ 
            'name' => 'writer',
            'abilities' => ["dashboard.view","blog.view","blog.create","blog.edit","blog.delete"],
        ]);
        RoleUser::create([ 
            'user_id' => '1',
            'role_id' => '1',
        ]);
    }
}
