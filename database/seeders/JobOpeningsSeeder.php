<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobOpening;
use App\Models\Establishment;

class JobOpeningsSeeder extends Seeder
{
    public function run(): void
    {
        $est = Establishment::inRandomOrder()->first();

        $jobs = [
            [
                'position_id' => null,
                'establishment_id' => $est ? $est->id : null,
                'title' => 'Registered Nurse',
                'description' => 'Provide nursing care and support at our hospital.',
                'employment_type' => 'Full-time',
                'location' => 'Sifawa',
                'vacancies' => 2,
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'position_id' => null,
                'establishment_id' => $est ? $est->id : null,
                'title' => 'ICT Trainer',
                'description' => 'Deliver digital skills training for our technology centre.',
                'employment_type' => 'Part-time',
                'location' => 'Sifawa',
                'vacancies' => 1,
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'position_id' => null,
                'establishment_id' => $est ? $est->id : null,
                'title' => 'Administrative Assistant',
                'description' => 'Office administration and support for foundation programs.',
                'employment_type' => 'Full-time',
                'location' => 'Sifawa',
                'vacancies' => 1,
                'status' => 'published',
                'published_at' => now(),
            ],
        ];

        foreach ($jobs as $job) {
            JobOpening::create($job);
        }
    }
}
