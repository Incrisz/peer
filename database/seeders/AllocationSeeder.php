<?php

namespace Database\Seeders;

use App\Models\Allocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllocationSeeder extends Seeder
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
                "allocation" => "Public Ico Sale",
                "perentage" => 10,
                "token_amount" => 100000000,
                "vesting_period" => "TGE 15%, 3 months lock, then 5% each month (20 months in total)",
            ],
            [
                "allocation" => "Team",
                "perentage" => 10,
                "token_amount" => 100000000,
                "vesting_period" => "TGE 0%, 12 months lock, then 25% every 3 months (22 months in total)",
            ],
            [
                "allocation" => "Marketing",
                "perentage" => 6,
                "token_amount" => 600000000,
                "vesting_period" => "TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)",
            ],
            [
                "allocation" => "Research & Development",
                "perentage" => 4,
                "token_amount" => 400000000,
                "vesting_period" => "TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)",
            ],
            [
                "allocation" => "Public Sale",
                "perentage" => 70,
                "token_amount" => 7000000000,
                "vesting_period" => "Not Applicable",
            ],
        ];
        Allocation::insert($data);
    }
}
