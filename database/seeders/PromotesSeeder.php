<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('promotes')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Promote exclusive offers for Peernetics loyalty program members',
    'button_text' => 'Learn More',
    'link' => 'merchant-program',
    'description' => '
                Join the Peernetics Merchant Program and offer exclusive discounts to
                                                Peernetics members. Our mission is to ensure that our community members
                                                and business partners support and interact with each other. Become a
                                                partner and start expanding your presence today.
                ',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
