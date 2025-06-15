<?php

namespace Database\Seeders;

use App\Models\PromoteBussiness;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoteBussinessSeeder extends Seeder
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
                'title' => "Promote your business with Peernetics",
                'button_text' => "Learn More",
                'link' => "merchant-marketing-service",
                'description' => "
                Increase brand awareness and attract more customers to your business. Peernetics Marketing Service showcases your products and services to active and interested cryptocurrency buyers, allowing you to increase the new revenue stream you have established.
                "
            ]
        ];
        PromoteBussiness::insert($data);
    }
}
