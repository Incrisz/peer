<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('page_contents')->insert(array (
  0 => 
  array (
    'id' => 1,
    'page_id' => 2,
    'name' => 'section_one_title',
    'content' => 'About Peernetics',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  1 => 
  array (
    'id' => 2,
    'page_id' => 2,
    'name' => 'section_one_description',
    'content' => 'Peernetics exists to enable the mass adoption
                of cryptocurrency payments. Through
                optimised cryptocurrency payment solutions,
                Peernetics empowers businesses to accept,
                exchange, withdraw, send, store and receive
                cryptocurrencies.',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  2 => 
  array (
    'id' => 3,
    'page_id' => 2,
    'name' => 'section_one_image',
    'content' => 'images/about/about-left-bnr.png',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  3 => 
  array (
    'id' => 4,
    'page_id' => 2,
    'name' => 'section_two_title',
    'content' => 'About Peernetics',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  4 => 
  array (
    'id' => 5,
    'page_id' => 2,
    'name' => 'section_two_description',
    'content' => 'Founded by a team of passionate
                professionals, we seek to make it as
                easy as possible for all businesses to
                step into the world of cryptocurrency.
                We break down barriers to entry by
                taking ground-breaking and confusing
                technology and transforming it into an
                uncomplicated and user-friendly
                cryptocurrency payment gateway.',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  5 => 
  array (
    'id' => 6,
    'page_id' => 2,
    'name' => 'section_two_sub_text',
    'content' => 'Together, we can unlock the power of
                cryptocurrency and transform your
                business',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  6 => 
  array (
    'id' => 7,
    'page_id' => 2,
    'name' => 'section_two_link_url',
    'content' => 'cryptocurrency-payment-gateway.html',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  7 => 
  array (
    'id' => 8,
    'page_id' => 2,
    'name' => 'section_two_image',
    'content' => 'images/about/about-right-bnr_0.png',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
  8 => 
  array (
    'id' => 9,
    'page_id' => 2,
    'name' => 'section_two_button_text',
    'content' => 'Learn More',
    'created_at' => '2024-07-04 10:13:29',
    'updated_at' => '2024-07-04 10:13:29',
  ),
));
    }
}
