<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CryptoItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('crypto_items')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Instant exchange of cryptocurrency and fiat',
    'description' => 'Get paid in the currency of your choice and let customers pay their way. Whether you\'re a fiat-only business but want to enable customers to pay in crypto, or you\'re a crypto-only business and want to attract users, Peernetics gives you the option of both.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Ultra-low transaction fees and no chargebacks',
    'description' => 'Tired of high card transaction fees and chargebacks? Peernetics commission is only 0.5-1% and is one of the lowest in the industry. What\'s more, you never have to worry about chargebacks.
                ',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Accept global payments in over 100 cryptocurrencies',
    'description' => 'Get paid from anywhere in the world in over 100 of the most popular cryptocurrencies. You can even instantly convert them to another currency or fiat.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Convenient interfaces and 24/7 support',
    'description' => 'Peernetics is the cryptocurrency gateway for everyone. With a user-friendly interface and 24/7 customer support, we ensure that your transition to accepting payments in cryptocurrency will be smooth and fast.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
