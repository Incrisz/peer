<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
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
                "title" => "Brand Promotion",
                "description" => "One of the major selling points of Peernetics is the amazing brand partnerships we secure. Honestly, we’ll never stop shouting about it. So, that means you’ll get a ton of free marketing and the opportunity to showcase your brand to an engaged and highly active community.",
                "image" => "images/merchant/brand-promotion.png",
            ]
        ];
        Brand::insert($data);
    }
}
