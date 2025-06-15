<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('exchanges')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Exchange',
    'button_text' => 'Buy on QuickSwap',
    'link' => 'http://peeneticsbe.test/cryptocurrency-payment-gateway',
    'image' => 'images/pns/quickswap.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
