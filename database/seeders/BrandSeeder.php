<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Admin;
use App\Models\Category;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetch an existing admin and category
      
        $category = Category::first();

        if (! $category) {
            $this->command->error('No admin or category found. Please seed Admins and Categories first.');
            return;
        }

        // List of brand names
        $brandNames = [
            'Audi Repair Dubai',
            'BMW Repair Dubai',
            'Mercedes Repair Dubai',
            'Porsche Repair Dubai',
            'Volkswagen Repair Dubai',
            'Volvo Repair Dubai',
            'Ferrari Repair Dubai',
            'Lamborghini Repair Dubai',
            'Maserati Repair Dubai',
            'Bentley Repair Dubai',
            'Jaguar Repair Dubai',
            'Range Rover Repair Dubai',
            'Mini Cooper Repair Dubai',
            'Rolls Royce Repair Dubai',
            'Cadillac Repair Dubai',
            'Chevrolet Repair Dubai',
            'Dodge Repair Dubai',
            'Ford Repair Dubai',
            'GMC Repair Dubai',
            'Hummer Repair Dubai',
            'Jeep Repair Dubai',
            'Lincoln Repair Dubai',
            'Audi Repair Sharjah',
            'BMW Repair Sharjah',
            'Mercedes Repair Sharjah',
            'Porsche Repair Sharjah',
            'Volkswagen Repair Sharjah',
            'Volvo Repair Sharjah',
            'Ferrari Repair Sharjah',
            'Lamborghini Repair Sharjah',
            'Maserati Repair Sharjah',
            'Bentley Repair Sharjah',
            'Jaguar Repair Sharjah',
            'Range Rover Repair Sharjah',
            'Mini Cooper Repair Sharjah',
            'Rolls Royce Repair Sharjah',
            'Cadillac Repair Sharjah',
            'Chevrolet Repair Sharjah',
            'Dodge Repair Sharjah',
            'Ford Repair Sharjah',
            'GMC Repair Sharjah',
            'Hummer Repair Sharjah',
            'Jeep Repair Sharjah',
            'Lincoln Repair Sharjah',
        ];

        foreach ($brandNames as $name) {
            Brand::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name'        => $name,
                    'category_id' => $category->id,
                    'user_id'     => $admin->id,
                    'image'       => null,
                    'heading'     => null,
                    'description' => null,
                    'status'      => 'published',
                ]
            );
        }

        $this->command->info('Brands seeded successfully!');
    }
}
