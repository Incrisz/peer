<?php

namespace Database\Seeders;

use App\Models\CryptoBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CryptoBenefitSeeder extends Seeder
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
                "title" => "User-friendly interfaces",
                "description" => "User-friendly interfaces",
            ],
            [
                "title" => "Accept over 100 digital currencies",
                "description" => "Accept over 100 digital currencies",
            ],
            [
                "title" => "0.5% - 1% transaction fee",
                "description" => "0.5% - 1% transaction fee",
            ],
            [
                "title" => "Integrates with your other systems",
                "description" => "Integrates with your other systems",
            ],
            [
                "title" => "Accept global payments",
                "description" => "Accept global payments",
            ],
            [
                "title" => "Secure Fraud Prevention Features",
                "description" => "Secure Fraud Prevention Features",
            ],
        ];
        CryptoBenefit::insert($data);
    }
}
