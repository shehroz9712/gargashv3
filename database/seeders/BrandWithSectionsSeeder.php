<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandWithSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brand = Brand::create([
            'name' => 'Audi',
            'slug' => 'audi',
            'image' => 'brands/audi.png',
            'description' => 'Audi Repair Dubai Service',
        ]);

        $sections = [
            [
                'heading' => 'The Finest Dealer Alternative Audi Service Center in Dubai',
                'image' => 'sections/banner.jpg',
                'description' => 'Professional Audi repair and service without dealership prices.',
                'link' => '/book-now',
                'btn_text' => 'Book an Appointment',
                'another_link' => '/audi-service',
                'another_btn_text' => 'Audi Full Service',
            ],
            [
                'heading' => 'Unrivalled Technicians',
                'image' => 'sections/technicians.jpg',
                'description' => 'Our expert Audi repair specialists provide dealer-level service...',
            ],
            [
                'heading' => 'Genuine Audi Parts Use',
                'image' => 'sections/parts.jpg',
                'description' => 'We only use genuine Audi parts to maintain performance and reliability...',
            ],
            [
                'heading' => 'Transparency',
                'image' => 'sections/transparency.jpg',
                'description' => 'No hidden fees. We keep you informed every step of the way...',
            ],

        ];

        foreach ($sections as $data) {
            $brand->sections()->create($data);
        }
    }
}
