<?php

namespace Database\Seeders;

use App\Models\MerchantProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchantProgramSeeder extends Seeder
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
                "title" => "Merchant Program",
                "description" => "The Peernetics Merchant Program opens the door to crypto and helps your business thrive.

                Offer exclusive discounts to Peernetics holders, attract more customers to your products and services and 
                generate more revenue.",
                "image" => "images/merchant/collab.png",
            ]
        ];
        MerchantProgram::insert($data);
    }
}
