<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CryptoBenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('crypto_benefits')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'User-friendly interfaces',
    'description' => 'User-friendly interfaces',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Accept over 100 digital currencies',
    'description' => 'Accept over 100 digital currencies',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => '0.5% - 1% transaction fee',
    'description' => '0.5% - 1% transaction fee',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Integrates with your other systems',
    'description' => 'Integrates with your other systems',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Accept global payments',
    'description' => 'Accept global payments',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Secure Fraud Prevention Features',
    'description' => 'Secure Fraud Prevention Features',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
