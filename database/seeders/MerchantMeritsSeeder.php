<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantMeritsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('merchant_merits')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Global and local outreach programs',
    'description' => '<p>Choose your target market and we will find it. Whether you\'re a local
                or international business, we\'ll refine your marketing campaign to
                reach the people most likely to buy from you.</p>
            ',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Exceptional organic growth',
    'description' => '<p>As our influence grows, so will yours. The Peernetics team is
                committed to implementing an effective crypto marketing strategy
                that will allow us to significantly increase website and social
                media engagement. When you sign up for our marketing services, we
                will take you with us, prioritizing both our growth and yours.</p>',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
