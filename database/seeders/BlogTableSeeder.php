<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => 'How this Specialist Luxury car workshop came to be',
                'slug' => Str::slug('How To Improve Fuel Efficiency'),
                'short_content' => 'We all know that a “heavy foot on the gas” means that you burn more fuel when you drive.',
                'content' => '   <span>
                <p>Our journey began with a passion for high-performance vehicles and a commitment to providing top-tier
                    service for luxury car owners. Recognizing the need for a dedicated workshop specializing in premium
                    automotive brands, we set out to create a space where precision, expertise, and customer satisfaction
                    come first.</p>
                <p>With years of experience in the automotive industry, our team of highly skilled professionals ensures
                    that every vehicle receives the care and attention it deserves. From routine maintenance to complex
                    repairs, we utilize advanced technology and industry-leading techniques to deliver exceptional results.
                </p>
                <p>Driven by our love for luxury cars and a vision to set new standards in automotive servicing, our
                    workshop has grown into a trusted name among enthusiasts and collectors. Our dedication to quality
                    workmanship and customer trust continues to fuel our success, making us the go-to destination for
                    specialist luxury car care.</p>
            </span>',
                'author' => 'Gargash',
                'is_featured' => true,
                'status' => 'published',
                'image' => 'blog-2-hero-bg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How To Improve Fuel Efficiency',
                'slug' => Str::slug('How To Improve Fuel Efficiency'),
                'short_content' => 'We all know that a “heavy foot on the gas” means that you burn more fuel when you drive.',
                'content' => '   <span>
                <p>Our journey began with a passion for high-performance vehicles and a commitment to providing top-tier
                    service for luxury car owners. Recognizing the need for a dedicated workshop specializing in premium
                    automotive brands, we set out to create a space where precision, expertise, and customer satisfaction
                    come first.</p>
                <p>With years of experience in the automotive industry, our team of highly skilled professionals ensures
                    that every vehicle receives the care and attention it deserves. From routine maintenance to complex
                    repairs, we utilize advanced technology and industry-leading techniques to deliver exceptional results.
                </p>
                <p>Driven by our love for luxury cars and a vision to set new standards in automotive servicing, our
                    workshop has grown into a trusted name among enthusiasts and collectors. Our dedication to quality
                    workmanship and customer trust continues to fuel our success, making us the go-to destination for
                    specialist luxury car care.</p>
            </span>',
                'author' => 'Gargash',
                'is_featured' => false,
                'status' => 'published',
                'image' => 'blog-3-hero-bg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Top 5 Car Maintenance Tips',
                'slug' => Str::slug('Top 5 Car Maintenance Tips'),
                'short_content' => 'Regular maintenance keeps your car in top condition and prevents costly repairs.',
                'content' => '   <span>
                <p>Our journey began with a passion for high-performance vehicles and a commitment to providing top-tier
                    service for luxury car owners. Recognizing the need for a dedicated workshop specializing in premium
                    automotive brands, we set out to create a space where precision, expertise, and customer satisfaction
                    come first.</p>
                <p>With years of experience in the automotive industry, our team of highly skilled professionals ensures
                    that every vehicle receives the care and attention it deserves. From routine maintenance to complex
                    repairs, we utilize advanced technology and industry-leading techniques to deliver exceptional results.
                </p>
                <p>Driven by our love for luxury cars and a vision to set new standards in automotive servicing, our
                    workshop has grown into a trusted name among enthusiasts and collectors. Our dedication to quality
                    workmanship and customer trust continues to fuel our success, making us the go-to destination for
                    specialist luxury car care.</p>
            </span>',
                'author' => 'John Doe',
                'is_featured' => false,
                'status' => 'published',
                'image' => 'blog-img-3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Electric vs. Gasoline Cars',
                'slug' => Str::slug('Electric vs. Gasoline Cars'),
                'short_content' => 'Electric cars are becoming more popular, but how do they compare to gasoline cars?',
                'content' => '   <span>
                <p>Our journey began with a passion for high-performance vehicles and a commitment to providing top-tier
                    service for luxury car owners. Recognizing the need for a dedicated workshop specializing in premium
                    automotive brands, we set out to create a space where precision, expertise, and customer satisfaction
                    come first.</p>
                <p>With years of experience in the automotive industry, our team of highly skilled professionals ensures
                    that every vehicle receives the care and attention it deserves. From routine maintenance to complex
                    repairs, we utilize advanced technology and industry-leading techniques to deliver exceptional results.
                </p>
                <p>Driven by our love for luxury cars and a vision to set new standards in automotive servicing, our
                    workshop has grown into a trusted name among enthusiasts and collectors. Our dedication to quality
                    workmanship and customer trust continues to fuel our success, making us the go-to destination for
                    specialist luxury car care.</p>
            </span>',
                'author' => 'Jane Smith',
                'is_featured' => true,
                'status' => 'published',
                'image' => 'blog-4-hero-bg.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
