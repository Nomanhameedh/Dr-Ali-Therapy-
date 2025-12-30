<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TherapyCategory;
use App\Models\TherapyPackage;

class TherapySeeder extends Seeder
{
    public function run(): void
    {
        // Therapy Categories
        $categories = [
            ['name' => 'Mental Health Therapy', 'description' => 'Depression, anxiety, stress management'],
            ['name' => 'Physical Therapy', 'description' => 'Physiotherapy and rehabilitation'],
            ['name' => 'Speech Therapy', 'description' => 'Speech improvement and communication skills'],
            ['name' => 'Occupational Therapy', 'description' => 'Daily life activity improvement'],
            ['name' => 'Child Behavioral Therapy', 'description' => 'Behavioral therapy for children'],
            ['name' => 'Stress & Anxiety Therapy', 'description' => 'Stress reduction and anxiety management'],
        ];

        foreach ($categories as $cat) {
            TherapyCategory::create($cat);
        }

        // Therapy Packages
        $packages = [
            ['therapy_category_id' => 1, 'name' => 'Anxiety Management', 'description' => 'Reduce anxiety and stress', 'duration' => '30 min', 'price' => 50, 'mode' => 'online'],
            ['therapy_category_id' => 2, 'name' => 'Physio Basic', 'description' => 'Initial physiotherapy sessions', 'duration' => '60 min', 'price' => 70, 'mode' => 'on-site'],
            ['therapy_category_id' => 3, 'name' => 'Speech Clarity', 'description' => 'Improve pronunciation and fluency', 'duration' => '45 min', 'price' => 60, 'mode' => 'online'],
        ];

        foreach ($packages as $pack) {
            TherapyPackage::create($pack);
        }
    }
}
