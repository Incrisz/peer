<?php

namespace Database\Seeders;

use App\Models\PageContent;
use App\Models\SitePage;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            //

            [
                "name" => "section_one_title",
                "content" => "About Peernetics"
            ],

            [
                "name" => "section_one_description",
                "content" => "Peernetics exists to enable the mass adoption
                of cryptocurrency payments. Through
                optimised cryptocurrency payment solutions,
                Peernetics empowers businesses to accept,
                exchange, withdraw, send, store and receive
                cryptocurrencies."
            ],

            [
                "name" => "section_one_image",
                "content" => "images/about/about-left-bnr.png"
            ],


            [
                "name" => "section_two_title",
                "content" => "About Peernetics"
            ],


            [
                "name" => "section_two_description",
                "content" => "Founded by a team of passionate
                professionals, we seek to make it as
                easy as possible for all businesses to
                step into the world of cryptocurrency.
                We break down barriers to entry by
                taking ground-breaking and confusing
                technology and transforming it into an
                uncomplicated and user-friendly
                cryptocurrency payment gateway.",
            ],

            [
                "name" => "section_two_sub_text",
                "content" => "Together, we can unlock the power of
                cryptocurrency and transform your
                business"
            ],

            [
                "name" => "section_two_link_url",
                "content" => "cryptocurrency-payment-gateway.html"
            ],


            [
                "name" => "section_two_image",
                "content" => "images/about/about-right-bnr_0.png"
            ],

            [
                "name" => "section_two_button_text",
                "content" => "Learn More"
            ],

        ];
        foreach ($data as $da) {
           $page = SitePage::where('name', 'About')->first();
            if(!$page)break;
            $da['page_id'] = $page->id;
            PageContent::updateOrCreate(["name" => $da['name'], 'page_id' => $page->id], $da);
        }
    }
}
