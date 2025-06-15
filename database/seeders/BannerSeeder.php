<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'title' => "Revolutionarys Delivered",
            'middle_text' => "Crypto",
            'subtitle' => "Payment Gateway",
            'loyalty_button_text' => "Loyalty Club",
            'ico_button_text' => "ICO Sign  Up",
            'images' => "{}",
        ];

        Banner::insert($data);
    }
}
