<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('merchant_programs')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Merchant Program',
    'description' => 'The Peernetics Merchant Program opens the door to crypto and helps your business thrive.

                Offer exclusive discounts to Peernetics holders, attract more customers to your products and services and 
                generate more revenue.',
    'image' => 'images/merchant/collab.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
