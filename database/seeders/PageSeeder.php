<?php

namespace Database\Seeders;

use App\Models\SitePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
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
                'name' => 'Home',
            ],
            [
                'name' => 'About',
            ],
            [
                'name' => 'Road Maps',
            ],
            [
                'name' => 'Partners',
            ],
            // [
            //     'name' => 'Merchants',
            // ],
            [
                'name' => 'Payment Gateway',
            ],
            [
                'name' => 'Pns Token',
            ],
            [
                'name' => 'Loyalty Program',
            ],
            [
                'name' => 'Merchant Program',
            ],
            [
                'name' => 'Faqs',
            ],
            [
                'name' => 'Ioc Pre-sale',
            ],
        ];
        SitePage::insert($data);
    }
}
