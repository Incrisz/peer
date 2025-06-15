<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollaborativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('collaboratives')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Collaborative Growth',
    'description' => 'When you join the Merchant Program, you’ll instantly be seen as a partner. Our working relationship is mutually beneficial, and our mission is to help you succeed. As your brand awareness increases, so does ours. This is a crypto-for-businesses ecosystem where we all succeed.',
    'image' => 'images/merchant/collaborative-growth.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
