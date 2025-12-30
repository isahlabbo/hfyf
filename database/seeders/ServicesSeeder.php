<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Education and health institutions',
                'description' => 'Support and manage educational and health institutions.',
                'icon' => 'bi-building-fill'
            ],
            [
                'name' => 'Continued education and public enlightenment',
                'description' => 'Public enlightenment and continued education programs.',
                'icon' => 'bi-megaphone-fill'
            ],
            [
                'name' => 'Scholarship and student support',
                'description' => 'Scholarships and student support initiatives.',
                'icon' => 'bi-award-fill'
            ],
            [
                'name' => 'Promotion of religious practice',
                'description' => 'Programs that promote religious practice and faith formation.',
                'icon' => 'bi-moon-stars-fill'
            ],
            [
                'name' => 'Research and publication',
                'description' => 'Research projects and publication activities.',
                'icon' => 'bi-journal-text'
            ],
            [
                'name' => 'Foodstuff and cash assistance',
                'description' => 'Provision of food items and cash support to vulnerable people.',
                'icon' => 'bi-basket-fill'
            ],
            [
                'name' => 'Medical assistance',
                'description' => 'Medical outreach and assistance programmes.',
                'icon' => 'bi-hospital-fill'
            ],
            [
                'name' => 'Shelter and school material assistance',
                'description' => 'Shelter provision and distribution of school materials.',
                'icon' => 'bi-house-heart-fill'
            ],
            [
                'name' => 'Water supply and sanitary facilities',
                'description' => 'Water and sanitation projects.',
                'icon' => 'bi-droplet-half'
            ],
            [
                'name' => 'Free firefighting service',
                'description' => 'Community firefighting service.',
                'icon' => 'bi-fire'
            ],
        ];

        foreach ($services as $s) {
            Service::create($s);
        }
    }
}
