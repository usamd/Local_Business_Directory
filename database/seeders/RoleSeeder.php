<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Business_Owner'],
            ['name' => 'User'],
            ['name' => 'Root'],
            ['name' => 'Admin'],

        ];

        // Insert data into 'roles' table
        DB::table('roles')->insert($roles);
    }
}
