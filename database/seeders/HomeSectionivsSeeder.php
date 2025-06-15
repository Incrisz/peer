<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSectionivsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('home_sectionivs')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Seamless Integrations',
    'description' => 'Swiftly integrate Peernetics with other platforms you use.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'User-Friendly Interface',
    'description' => 'A system built for everyone to easily use. Even
                beginners.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Global Crypto Payments',
    'description' => 'Instantly accept payments from people around the world.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => '100+ Digital Currencies',
    'description' => 'Accept payments in all of the most popular
                cryptocurrencies.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Fraud Prevention Features',
    'description' => 'Crypto payments are irreversible, so there are no
                chargebacks.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Ultra Low Fees',
    'description' => 'Fees ranging from 0.5% - 1% on all transactions.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
