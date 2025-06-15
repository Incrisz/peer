<?php

namespace Database\Seeders;

use App\Models\LoyaltyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoyaltyProgramSeeder extends Seeder
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
                "title" => "Loyalty Program",
                "description" => "At Peernetics, we reward our token holders. Hold just 200 PNS, and you will automatically be entered to receive exclusive benefits with our merchant partners.",
                "image" => "images/loyalty/token-bnr.png",
            ]
        ];

        LoyaltyProgram::insert($data);
    }
}
