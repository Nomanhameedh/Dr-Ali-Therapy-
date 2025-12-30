<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TherapyCategory;
use App\Models\TherapyPackage;

class TherapyPackageSeeder extends Seeder
{
    public function run(): void
    {
        // 1️⃣ Category create karo
        $category = TherapyCategory::firstOrCreate(
            ['name' => 'General Therapy'],
            ['description' => 'Default category']
        );

        // 2️⃣ Packages create karo
        $packages = [
            [
                'name' => 'Stress Relief Therapy',
                'description' => 'Reduce stress and anxiety',
                'duration' => '45 minutes',
                'price' => 2500,
                'mode' => 'online',
            ],
            [
                'name' => 'Physical Therapy',
                'description' => 'Recover from injuries',
                'duration' => '60 minutes',
                'price' => 3500,
                'mode' => 'on-site',
            ],
            [
                'name' => 'Mental Wellness',
                'description' => 'Improve mental health',
                'duration' => '50 minutes',
                'price' => 3000,
                'mode' => 'online',
            ],
            [
                'name' => 'Child Therapy',
                'description' => 'Therapy for children',
                'duration' => '40 minutes',
                'price' => 2000,
                'mode' => 'on-site',
            ],
            [
                'name' => 'Couple Therapy',
                'description' => 'Improve relationships',
                'duration' => '60 minutes',
                'price' => 4000,
                'mode' => 'online',
            ],
        ];

        foreach ($packages as $pkg) {
            TherapyPackage::updateOrCreate(
                [
                    'name' => $pkg['name'],
                    'therapy_category_id' => $category->id,
                ],
                array_merge($pkg, ['therapy_category_id' => $category->id])
            );
        }
    }
}
