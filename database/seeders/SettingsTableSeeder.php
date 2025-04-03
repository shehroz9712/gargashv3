<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'title' => 'Gargash',
            'email' => 'info@gargash.com',
            'phone' => '+1234567890',
            'address' => '123, Gargash Street, City, Country',
            'website' => 'https://www.gargash.com',
            'logo' => 'logo.png',
            'facebook' => 'https://facebook.com/gargash',
            'twitter' => 'https://twitter.com/gargash',
            'youtube' => 'https://youtube.com/gargash',
            'footer_scripts' => '<script>console.log("Gargash");</script>',
            'footer_sentence' => 'Welcome to Gargash.',
            'copyright' => '© ' . date('Y') . ' Gargash. All rights reserved.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
