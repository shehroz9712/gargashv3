<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'gargashautorepair@gmail.com',
                'password' => Hash::make('password1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
