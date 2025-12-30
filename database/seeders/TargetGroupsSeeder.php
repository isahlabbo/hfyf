<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TargetGroup;

class TargetGroupsSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Orphans and widows, aged and incapacitated',
                'description' => 'Support for orphans, widows, elderly and incapacitated persons.',
                'icon' => 'bi-heart-pulse-fill'
            ],
            [
                'name' => 'Sick and less privileged',
                'description' => 'Medical and welfare support for sick and less privileged people.',
                'icon' => 'bi-person-wheelchair'
            ],
            [
                'name' => 'Oppressed and victims of disaster',
                'description' => 'Assistance for oppressed people and disaster victims.',
                'icon' => 'bi-house-heart-fill'
            ],
            [
                'name' => 'Students and youths',
                'description' => 'Programs targeting students and youths.',
                'icon' => 'bi-mortarboard-fill'
            ],
            [
                'name' => 'Women and vulnerable groups',
                'description' => 'Support programs for women and other vulnerable groups.',
                'icon' => 'bi-people-fill'
            ],
            [
                'name' => 'Internally displaced people',
                'description' => 'Support for internally displaced persons (IDPs).',
                'icon' => 'bi-geo-alt-fill'
            ],
            ['name' => 'General public enlightenment and Da’awah workers', 'description' => 'Public enlightenment and Da’awah outreach programs.', 'icon' => 'bi-megaphone-fill'],
        ];

        foreach ($groups as $g) {
            TargetGroup::create($g);
        }
    }
}
