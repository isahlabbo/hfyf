<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Foundation Launches New Scholarship Program',
                'body' => '<p>We are pleased to announce a new scholarship program for deserving students.</p>',
                'image' => null,
                'published_at' => now(),
            ],
            [
                'title' => 'Medical Outreach in Rural Communities',
                'body' => '<p>Our team visited several rural communities to provide free medical check-ups.</p>',
                'image' => null,
                'published_at' => now()->subDays(3),
            ],
        ];

        foreach ($items as $item) {
            $item['slug'] = Str::slug($item['title']).'-'.Str::random(6);
            News::create($item);
        }
    }
}
