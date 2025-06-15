<?php

namespace Database\Seeders;

use App\Models\Exchange;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExchangeSeeder extends Seeder
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
                "title" => "Exchange",
                "button_text" => "Buy on QuickSwap",
                "link" => env('APP_URL') . "/cryptocurrency-payment-gateway",
                "image" => "images/pns/quickswap.png",
            ]
        ];

        Exchange::insert($data);
    }
}
