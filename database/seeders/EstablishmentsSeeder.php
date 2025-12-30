<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Establishment;
use App\Models\Unit;

class EstablishmentsSeeder extends Seeder
{
    public function run(): void
    {
        $units = Unit::all();

        if ($units->isEmpty()) {
            // fallback: create a default unit
            $unit = Unit::create(['name' => 'General', 'description' => 'General unit']);
            $unitIds = [$unit->id];
        } else {
            $unitIds = $units->pluck('id')->toArray();
        }

        $establishments = [
            [
                'name' => 'Fatima College of Nursing Sciences',
                'address' => null, 'phone' => null,
                'email' => null,
                'description' => 'Nursing education and training.',
                'website' => null,
                'icon' => 'bi-mortarboard-fill',
                'image' => '/images/establishments/nursing.jpg',
            ],
            [
                'name' => 'Fatima Yahaya Hospital',
                'address' => null,
                'phone' => null,
                'email' => null,
                'description' => 'Hospital and medical services.',
                'website' => null,
                'icon' => 'bi-hospital-fill',
                'image' => '/images/establishments/hospital.jpg',
            ],
            [
                'name' => 'Fatima Farms',
                'address' => null,
                'phone' => null,
                'email' => null,
                'description' => 'Agricultural project (Fatima Farm).',
                'website' => null,
                'icon' => 'bi-tree-fill',
                'image' => '/images/establishments/farm.jpg',
            ],
            [
                'name' => 'Fatima International School',
                'address' => null,
                'phone' => null,
                'email' => null,
                'description' => 'International school under the foundation.',
                'website' => null,
                'icon' => 'bi-building-fill',
                'image' => '/images/establishments/school.jpg',
            ],
            [
                'name' => 'Malam Yahaya Islamic Library',
                'address' => null,
                'phone' => null,
                'email' => null,
                'description' => "Islamic library and resources.",
                "website" => null,
                "icon" => "bi-book-fill",
                'image' => '/images/establishments/library.jpg',
            ],

            [
                "name" => "Malam Yahaya Digital Technology Center",
                "address" => null,
                "phone" => null,
                "email" => null,
                "description" => "Digital technology and training center.", "website" => null,
                "icon" => "bi-laptop-fill",
                'image' => '/images/establishments/tech.jpg',
            ],
            [
                'name' => 'Malam Yahaya Fire Service',
                'address' => null,
                'phone' => null,
                'email' => null,
                'description' => 'Community firefighting service.',
                'website' => null,
                'icon' => 'bi-fire',
                'image' => '/images/establishments/fire_service.jpg',
            ],
            [
                'name' => 'Zauren Malam Yahaya',
                'address' => null,
                'phone' => null,
                'email' => null,
                'description' => 'Community housing / settlement.',
                'website' => null,
                'icon' => 'bi-house-fill',
                'image' => '/images/establishments/zaure.jpg',
            ],
            [
                'name' => 'Malam Yahaya Jumu\'at Mosque',
                'address' => null,
                'phone' => null,
                'email' => null,
                'description' => 'Community housing / settlement.',
                'website' => null,
                'icon' => 'bi-house-fill',
                'image' => '/images/establishments/mosque.jpg',
            ],
            
        ];

        foreach ($establishments as $index => $e) {
            $e['unit_id'] = $unitIds[$index % count($unitIds)];
            Establishment::create($e);
        }
    }
}
