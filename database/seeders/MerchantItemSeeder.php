<?php

namespace Database\Seeders;

use App\Models\MerchantItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchantItemSeeder extends Seeder
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
                "title" => "Influencer marketing",
                "image" => "images/merchant/influencermarketing.svg",
            ],
            [
                "title" => "Quarterly press releases",
                "image" => "images/merchant/quarterlypressreleases.svg",
            ],
            [
                "title" => "Social media content",
                "image" => "images/merchant/social-mediacontent.svg",
            ],
            [
                "title" => "Website features",
                "image" => "images/merchant/website-features.svg",
            ],
            [
                "title" => "Ongoing search engine optimisation",
                "image" => "images/merchant/ongoing-search-engine-optimisation.svg",
            ],
        ];

        MerchantItem::insert($data);
    }
}
