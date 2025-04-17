<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Admin;
use App\Models\Category;

class BrandSeeder extends Seeder
{
    public function run()
    {
        // 1️⃣ Fetch (or require) an admin
        $admin = Admin::first();
        if (! $admin) {
            $this->command->error('No Admin found! Please seed your Admins table first.');
            return;
        }

        // 2️⃣ Create or fetch the “German Cars” category
        $category = Category::firstOrCreate(
            ['name' => 'German Cars'],
            ['status' => 'published']
        );

        // 3️⃣ Your list of brand names
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
                    'image'       => 'audo-hero.png',
                    'heading'     => "Own an {$name}? Our premium {$name} Service Center offers expert repairs and top‑tier care.",
                    'description' => <<<HTML
<h2 class="display-6 fw-bold">The Finest Dealer-Alternative {$name} Service Center in Dubai</h2>
<p>We offer top‑notch {$name} services at our luxury car maintenance center, leveraging advanced tools and diagnostic software to service every model. We are one of the largest stand‑alone {$name} garages in the region.</p>
HTML,
                    'status'      => 'published',
                ]
            );
        }

        $this->command->info('✅ Brands seeded successfully!');
    }
}
