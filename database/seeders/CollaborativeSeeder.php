<?php

namespace Database\Seeders;

use App\Models\Collaborative;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollaborativeSeeder extends Seeder
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
                "title" => "Collaborative Growth",
                "description" => "When you join the Merchant Program, you’ll instantly be seen as a partner. Our working relationship is mutually beneficial, and our mission is to help you succeed. As your brand awareness increases, so does ours. This is a crypto-for-businesses ecosystem where we all succeed.",
                "image" => "images/merchant/collaborative-growth.png",
            ]
        ];
        Collaborative::insert($data);
    }
}
