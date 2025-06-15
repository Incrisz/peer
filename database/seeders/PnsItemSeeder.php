<?php

namespace Database\Seeders;

use App\Models\PnsItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PnsItemSeeder extends Seeder
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
                'title' => 'Benefit For Using PNS',
                'description' => 'Peernetics fees are already incredibly low at just 1%. However, for any merchants who decide to accept transactions in PNS, you’ll be charged 0.5% transaction fee. As thanks for facilitating the growth of the Peernertics ecosystem and for encouraging others to use PNS, we aim to make it as easy and cheap as possible to use.',
            ],
            [
                'title' => "An Investment Opportunity",
                'description' => "Our mission is to become the most trusted and widely-used cryptocurrency payment platform. As the popularity and number of users grow, so will the value of PNS. Therefore, anyone who buys and holds the PNS utility token will see their portfolio value increase over time."
            ],
        ];

        PnsItem::insert($data);
    }
}
