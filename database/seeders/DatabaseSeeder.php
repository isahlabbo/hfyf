<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UnitsSeeder;
use Database\Seeders\ServicesSeeder;
use Database\Seeders\TargetGroupsSeeder;
use Database\Seeders\EstablishmentsSeeder;
use Database\Seeders\NewsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    
        $this->call([
            UnitsSeeder::class,
            ServicesSeeder::class,
            TargetGroupsSeeder::class,
            EstablishmentsSeeder::class,
            NewsSeeder::class,
        ]);
    }
}
