<?php

namespace Database\Seeders;

use App\Models\TargetMarket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TargetMarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'title' => "Targeted Marketing",
                'button_text' => "Sign Up Now",
                'link' => "login",
                'description' => "
                Marketing budgets are the biggest expense in a business's finances.
                                                Choose<strong> </strong>from our range of cost-effective
                                                    marketing packages,<strong> </strong>we will place your
                                                brand&nbsp; to the ideal target audience. Just sign up, upload your
                                                marketing materials and we'll do the rest.
                "
            ]
        ];
        TargetMarket::insert($data);
    }
}
