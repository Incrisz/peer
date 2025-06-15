<?php

namespace Database\Seeders;

use App\Models\PnsUtility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PnsUtilitySeeder extends Seeder
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
                "title" => "PNS – The Peernetics Utility Token",
                "description" => "The Peernetics token is built on the Polygon Blockchain utilising Polygons PoS (Proof of Stake). This enables 65,000 transactions per second, which is one of the most secure and scalable network. PNS is the utility token that powers Peernetics reward system. Businesses, consumers, and investors are rewarded with exclusive and lucrative benefits. Peernetics cryptocurrency payment solutions facilitate transactions on your favourite cryptocurrencies, but utilising PNS is rewarded.
                ",
                "image" => "images/pns/pns.png",
            ],
        ];
        PnsUtility::insert($data);
    }
}
