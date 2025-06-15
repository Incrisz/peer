<?php

namespace Database\Seeders;

use App\Models\Promote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoteSeeder extends Seeder
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
                'title' => "Promote exclusive offers for Peernetics loyalty program members",
                'button_text' => "Learn More",
                'link' => "merchant-program",
                'description' => "
                Join the Peernetics Merchant Program and offer exclusive discounts to
                                                Peernetics members. Our mission is to ensure that our community members
                                                and business partners support and interact with each other. Become a
                                                partner and start expanding your presence today.
                "
            ]
        ];
        Promote::insert($data);
    }
}
