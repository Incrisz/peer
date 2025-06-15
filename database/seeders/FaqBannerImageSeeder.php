<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqBannerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('faq_banner_image')->insert(array (
  0 => 
  array (
    'id' => 1,
    'image' => '/images/faqbanner/FAQ.png',
    'created_at' => NULL,
    'updated_at' => '2024-07-09 11:16:18',
  ),
));
    }
}
