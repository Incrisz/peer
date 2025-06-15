<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
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
                'title' => "Give Your Customers Exclusive Offers",
                'button_text' => "Learn More",
                'link' => "merchant-program",
                'description' => "Join the Peernetics partner network and benefit from high-profile promotion. We’ll put your brand in front of the Peernetics community, enable you to send special discounts, and help you generate more revenue.
                ",
                "image" => "images/loyalty/exchange.png",
            ]
        ];
        Offer::insert($data);
    }
}
