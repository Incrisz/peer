<?php

namespace Database\Seeders;

use App\Models\MerchantSection;
use Illuminate\Database\Seeder;

class MerchantSectionSeeder extends Seeder
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
                "title" => "Become a Merchant Partner Today",
                "description" => "Sign up to Peernetics and exponentially accelerate the next phase of your
                business’s growth.",
                "button_text" => "Merchant Partner Program",
                "link" => url('merchant-program'),
            ],
        ];
        MerchantSection::insert($data);
    }
}
