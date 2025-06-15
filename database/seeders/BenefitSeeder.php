<?php

namespace Database\Seeders;

use App\Models\HomeSectionii;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            [
                'title' => 'Peernetics',
                'description' => 'First header',
                'is_header' => "1",
            ],
            [
                'name' => 'Loyalty Club',
                'description' => "Second header",
                'is_header' => "1",
            ],
            [
                'name' => 'Why join?',
                'description' => "100% of the discount secured goes to you. We don't keep anything",
                'is_header' => "0",
            ],
            [
                'name' => 'Benefit',
                'description' => "No need to wait for cashback. Instant discounts with brands online and offline",
                'is_header' => "0",
            ],
            [
                'name' => 'How to join?',
                'description' => "Hold 200 PNS tokens, connect your wallet. visit Getting started",
                'is_header' => "0",
            ]
        ];
        HomeSectionii::insert($data);
    }
}
