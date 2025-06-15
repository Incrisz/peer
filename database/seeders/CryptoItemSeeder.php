<?php

namespace Database\Seeders;

use App\Models\CryptoItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CryptoItemSeeder extends Seeder
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
                "title" => "Instant exchange of cryptocurrency and fiat",
                "description" => "Get paid in the currency of your choice and let customers pay their way. Whether you're a fiat-only business but want to enable customers to pay in crypto, or you're a crypto-only business and want to attract users, Peernetics gives you the option of both.",
            ],
            [
                "title" => "Ultra-low transaction fees and no chargebacks",
                "description" => "Tired of high card transaction fees and chargebacks? Peernetics commission is only 0.5-1% and is one of the lowest in the industry. What's more, you never have to worry about chargebacks.
                ",
            ],
            [
                "title" => "Accept global payments in over 100 cryptocurrencies",
                "description" => "Get paid from anywhere in the world in over 100 of the most popular cryptocurrencies. You can even instantly convert them to another currency or fiat.",
            ],
            [
                "title" => "Convenient interfaces and 24/7 support",
                "description" => "Peernetics is the cryptocurrency gateway for everyone. With a user-friendly interface and 24/7 customer support, we ensure that your transition to accepting payments in cryptocurrency will be smooth and fast.",
            ]
        ];

        CryptoItem::insert($data);
    }
}
