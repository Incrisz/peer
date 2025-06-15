<?php

namespace Database\Seeders;

use App\Models\MerchantService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchantServiceSeeder extends Seeder
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
                "title" => "Merchant Marketing Service",
                "description" => "Reduce marketing costs, target consumers who are actively involved in cryptocurrencies, and increase brand awareness. Our crypto marketing services are designed to help you successfully implement crypto and inform potential customers about your visionary brand.",
                "image" => "images/merchant/spaceship.png",
            ],
        ];
        MerchantService::insert($data);
    }
}
