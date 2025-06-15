<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CryptocurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('cryptocurrencies')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Cryptocurrency Payment Gateway',
    'description' => 'Discover a fast-growing new source of income for your business. Implement the best cryptocurrency payment gateway to enable your business to accept, exchange, withdraw, send, store and receive crypto payments.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
