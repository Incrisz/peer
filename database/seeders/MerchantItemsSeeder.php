<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('merchant_items')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Influencer marketing',
    'image' => 'images/merchant/influencermarketing.svg',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Quarterly press releases',
    'image' => 'images/merchant/quarterlypressreleases.svg',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Social media content',
    'image' => 'images/merchant/social-mediacontent.svg',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Website features',
    'image' => 'images/merchant/website-features.svg',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Ongoing search engine optimisation',
    'image' => 'images/merchant/ongoing-search-engine-optimisation.svg',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
