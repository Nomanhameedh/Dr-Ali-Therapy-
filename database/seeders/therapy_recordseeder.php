<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\therapy_record; // Model ko import karna zaroori hai

class therapy_recordseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data insert karne ka sahi tarika
        therapy_record::create([
            'name'  => 'Noman',
            'email' => 'nomi@gmail.com'
        ]);

        // Agar aap ek se zyada records dalna chahte hain:
        therapy_record::create([
            'name'  => 'Ali',
            'email' => 'ali@gmail.com'
        ]);
    }
}