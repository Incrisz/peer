<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'polygon',
                'image' => 'images/partner/polygon.png'
            ],
            [
                'title' => 'Aws Logo',
                'image' => 'images/partner/aws.png'
            ],
            [
                'title' => 'safe',
                'image' => 'images/partner/safe.png'
            ],
            [
                'title' => 'solid',
                'image' => 'images/partner/solid.png'
            ],
            [
                'title' => 'Mis',
                'image' => 'images/partner/mis.png'
            ],
        ];
        Partner::insert($data);
    }
}
