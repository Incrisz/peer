<?php

namespace Database\Seeders;

use App\Models\LoyaltyItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoyaltyItemSeeder extends Seeder
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
                "title" => "Get Discounts At Your Favourite Places",
                "description" => "PNS is a crypto with utility. Peernetics loyalty members receive excellent discounts at participating restaurants, coffee shops, retailers and many more. So, whether you’re headed out to dinner, grabbing a drink or buying a new gadget, you’ll be able to show your wallet balance and claim your offers."
            ],
            [
                "title" => "Discounts Applied Instantly",
                "description" => "Some people do cashback. But we don’t like to waste time. Every Peernetics reward discount is applied instantly, meaning you’ll pay less for the things you buy without having to wait for cashback to be reimbursed."
            ],
            [
                "title" => "The Discounts Are All Yours",
                "description" => "Peernetics loyalty members receive 100% of the discount agreed with partner retailers. We don’t keep any for ourselves because the aim of our program is to ensure the Peernetics community gets the best prices on products, services and experiences."
            ],
            [
                "title" => "How To Sign Up For The Loyalty Program",
                "description" => "There’s no need to sign up. When your digital wallet reaches a balance of 200 PNS, you’ll automatically qualify. We’re not here to harvest your data by making you sign up. All you have to do is show your wallet balance to participating partners to receive your discounts."
            ],
        ];

        LoyaltyItem::insert($data);
    }
}
