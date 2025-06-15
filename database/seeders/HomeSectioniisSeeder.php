<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSectioniisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('home_sectioniis')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Peernetics',
    'description' => 'First header',
    'is_header' => '1',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Loyalty Club',
    'description' => 'Second header',
    'is_header' => '1',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Why join?',
    'description' => '100% of the discount secured goes to you. We don\'t keep anything',
    'is_header' => '0',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Benefit',
    'description' => 'No need to wait for cashback. Instant discounts with brands online and offline',
    'is_header' => '0',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'How to join?',
    'description' => 'Hold 200 PNS tokens, connect your wallet. visit Getting started',
    'is_header' => '0',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
