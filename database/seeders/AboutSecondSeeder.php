<?php

namespace Database\Seeders;

use App\Models\AboutSecond;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSecondSeeder extends Seeder
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
                "title" => "About Peernetics",
                "description" => "Founded by a team of passionate
                professionals, we seek to make it as
                easy as possible for all businesses to
                step into the world of cryptocurrency.
                We break down barriers to entry by
                taking ground-breaking and confusing
                technology and transforming it into an
                uncomplicated and user-friendly
                cryptocurrency payment gateway.",
                'sub_text' => 'Together, we can unlock the power of
                cryptocurrency and transform your
                business',
                'button_text' => 'Learn More',
                'link_url' => env('APP_URL') . "/cryptocurrency-payment-gateway",
                "image" => "images/about/about-right-bnr_0.png",
            ],
        ];
        AboutSecond::insert($data);
    }
}
