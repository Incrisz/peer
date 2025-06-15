<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('featureds')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'blomberg',
    'image' => 'images/featured/bloombergnn.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'crypto',
    'image' => 'images/featured/cryptonn.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'marketWatch',
    'image' => 'images/featured/marketwatchnn.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'benzinga',
    'image' => 'images/featured/benzingnn.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Digital Journal',
    'image' => 'images/featured/dgn.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'MorningStar',
    'image' => 'images/featured/morningstarnn.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  6 => 
  array (
    'id' => 7,
    'title' => 'Yahoo Finance',
    'image' => 'images/featured/yahoo-financen.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  7 => 
  array (
    'id' => 8,
    'title' => 'Street Insider',
    'image' => 'images/featured/sinn.png',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
));
    }
}
