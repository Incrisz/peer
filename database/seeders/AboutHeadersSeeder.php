<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutHeadersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('about_headers')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'About Peernetics',
    'description' => '&nbsp; Peernetics exists to enable the mass adoption of cryptocurrency payments. Through optimised<br>&nbsp; cryptocurrency payment solutions, Peernetics empowers businesses to accept, exchange,<br>&nbsp;withdraw, send, store and receive cryptocurrencies.',
    'image' => 'images/about/about-left-bnr.png',
    'created_at' => NULL,
    'updated_at' => '2024-07-11 21:20:22',
  ),
));
    }
}
