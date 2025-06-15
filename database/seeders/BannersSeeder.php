<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('banners')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Revolutionarys Delivered',
    'middle_text' => 'Crypto',
    'subtitle' => 'Payment Gateway',
    'loyalty_button_text' => 'Loyalty Club',
    'ico_button_text' => 'ICO Sign  Up',
    'images' => '{}',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
