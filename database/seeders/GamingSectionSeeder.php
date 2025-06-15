<?php

namespace Database\Seeders;

use App\Models\GamingSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamingSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaming = [
            [
               
                'id' => 1,
                'title' => 'Gaming Section Title',
                'btn_name' => 'Learn More',
                'btn_link' => 'http://company-web.test/gaming-club',
                'description' => 'Turn your gaming skills into PNS tokens.',
                'mobile_image' => 'sites/default/files/css/gaming-folder/banner-home-page-box-removebg-preview.png',
                'desktop_image' => 'sites/default/files/css/gaming-folder/2 1-Photoroom.png'
            ]

            ];

            // foreach ($gaming as $data) {
            //     GamingSection::create($data);
            // }

        DB::table('gaming_sections')->insertOrIgnore($gaming);


    }
}
