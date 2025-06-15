<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('offers')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Give Your Customers Exclusive Offers',
    'button_text' => 'Learn More',
    'link' => 'merchant-program',
    'image' => 'images/loyalty/exchange.png',
    'description' => 'Join the Peernetics partner network and benefit from high-profile promotion. We’ll put your brand in front of the Peernetics community, enable you to send special discounts, and help you generate more revenue.
                ',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
