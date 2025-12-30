<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitsSeeder extends Seeder
{
    public function run(): void
    {
        $units = [
            [
                'name' => 'Educational Human Resources Development',
                'description' => 'Fatima College of Nursing Science, Fatima Yahaya International School, Fatima Yahaya Tahfiz Islamiyya School, Mallam Yahaya Islamic Library.',
                'icon' => 'bi-mortarboard-fill'
            ],
            [
                'name' => 'Social and Humanitarian Services',
                'description' => 'Food and medical assistance, school materials, shelter, clothing, sanitary facilities, water supply, and free firefighting service.',
                'icon' => 'bi-heart-fill'
            ],
            [
                'name' => 'Economic Empowerment',
                'description' => 'Skills acquisition, youth and women empowerment, interest-free loans, and specific empowerment programs.',
                'icon' => 'bi-currency-exchange'
            ],
            [
                'name' => 'Fundraising & Investment',
                'description' => 'Asset management, donations, revolving fund management, Zakah and endowment management.',
                'icon' => 'bi-coin'
            ],
        ];

        foreach ($units as $u) {
            Unit::create($u);
        }
    }
}
