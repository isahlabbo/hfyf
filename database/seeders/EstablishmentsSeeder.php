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
                'icon' => 'bi-mortarboard-fill'
            ],
            [
                'name' => 'Fatima Yahaya Hospital', 
                'address' => null, 
                'phone' => null, 
                'email' => null, 
                'description' => 'Hospital and medical services.', 
                'website' => null, 
                'icon' => 'bi-hospital-fill'
            ],
            [
                'name' => 'Fatima Farms', 
                'address' => null, 
                'phone' => null, 
                'email' => null, 
                'description' => 'Agricultural project (Fatima Farm).', 
                'website' => null, 
                'icon' => 'bi-tree-fill'],
            [
                'name' => 'Fatima International School', 
                'address' => null, 
                'phone' => null, 
                'email' => null, 
                'description' => 'International school under the foundation.', 
                'website' => null, 
                'icon' => 'bi-building-fill'
            ],
            [
                'name' => 'Malam Yahaya Islamic Library', 
                'address' => null, 
                'phone' => null, 'email' => null, 'description' => "Islamic library and resources.", "website" => null, "icon" => "bi-book-fill"],
                'email' => null, 
                'description' => "Islamic library and resources.", 
                "website" => null, 
                "icon" => "bi-book-fill"],
            [
                "name" => "Malam Yahaya Digital Technology Center", 
                "address" => null, 
                "phone" => null, 
                "email" => null,
                "description" => "Digital technology and training center.", "website" => null,
                "icon" => "bi-laptop-fill"
            ],
            [
                'name' => 'Malam Yahaya Fire Service', 
                'address' => null, 
                'phone' => null, 
                'email' => null, 
                'description' => 'Community firefighting service.', 
                'website' => null, 
                'icon' => 'bi-fire'
            ],
            [
                'name' => 'Zauren Malam Yahaya', 
                'address' => null, 
                'phone' => null, 
                'email' => null, 
                'description' => 'Community housing / settlement.', 
                'website' => null, 
                'icon' => 'bi-house-fill'
            ],
            [
                'name' => 'Malam Yahaya Jumu\'at Mosque', 
                'address' => null, 
                'phone' => null, 
                'email' => null, 
                'description' => 'Community housing / settlement.', 
                'website' => null, 
                'icon' => 'bi-house-fill'
            ],
            [
                'name' => 'Malam Yahaya Jumu\'at Mosque', 
                'address' => null, 
                'phone' => null, 
                'email' => null, 
                'description' => 'Mosque for Jum\'at prayers and religious activities.', 
                'website' => null, 
                'icon' => 'bi-moon-stars-fill'
            ],
        ];

        foreach ($establishments as $index => $e) {
            $e['unit_id'] = $unitIds[$index % count($unitIds)];
            Establishment::create($e);
        }
    }
}
