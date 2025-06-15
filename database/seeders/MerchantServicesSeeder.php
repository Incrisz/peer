<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('merchant_services')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Merchant Marketing Service',
    'description' => 'Reduce marketing costs, target consumers who are actively involved in cryptocurrencies, and increase brand awareness. Our crypto marketing services are designed to help you successfully implement crypto and inform potential customers about your visionary brand.',
    'image' => 'images/merchant/spaceship.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
